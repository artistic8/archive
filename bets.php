<?php

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact;
}
function combination($p, $n){
    if($n < $p) return 0;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$total = 0;
$totalPlace = 0;
$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$threes = include(__DIR__ . DIRECTORY_SEPARATOR . "threes.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

if(file_exists($oddsFile)) $totalRaces = count($allRacesOdds);
elseif(file_exists($outFile)) $totalRaces = count($oldData);
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
        if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
        if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    $sums = [];
    $mults = [];
    foreach($favorites as $one){
        foreach($favorites as $two){
            if($two > $one){
                $sums[] = $one + $two;
                $mults[] = $one * $two;
            }
        }
    }
    $sums = array_intersect($sums, $runners);
    $mults = array_intersect($mults, $runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    if(isset($winAmount)){
        $racetext .= "\t\t'win amount' => " . $winAmount . ",\n"; 
    }
    if(isset($qinAmount)){
        $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    }
    if(isset($trioAmount)){
        $racetext .= "\t\t'trio amount' => " . $trioAmount . ",\n"; 
    }
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $firstSet = true;
    $check = [];
    foreach($favorites as $F){
        $candidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        if(empty(array_diff($favorites, $candidates)) && count($favorites) >= 3) $check[] = $F;
        if($firstSet) {
            $inter = $candidates;
            $firstSet = false;
        }
        else $inter = array_intersect($inter, $candidates);
    }
    sort($inter);
    $inter = array_intersect($favorites, $inter);
    if(!empty($inter)){
        $racetext .= "\t\t'inter' => '" . implode(", ", $inter) . "',//count: " . count($inter) . "\n";
    }
    if(!empty($check)) $racetext .= "\t\t'check' => '" . implode(", ", $check) . "',\n";
    
    $set2 = array_values(array_unique(array_merge($sums, $mults)));
    sort($set2);
    $set2 = array_diff($set2, $favorites);
    $surePlace = [];
    foreach($favorites as $one){
        $union = []; 
        foreach($runners as $two){
            if($two !== $one){
                if($one < $two) $index = "f$one-f$two";
                else $index = "f$two-f$one";
                if(isset($threes[$raceNumber][$index])){
                    $threeSet = explode(", ", $threes[$raceNumber][$index]);
                    $union = array_values(array_unique(array_merge($union, $threeSet)));
                }
            }
        }
        sort($union);
        if(!empty($union)){
            sort($union);
            if(in_array($one, array_intersect($favorites, $union))){
                $surePlace[] = $one;
            }
        } 
    }
    if(!empty($surePlace)){
        $racetext .= "\t\t'Place' => '" . implode(", ", $surePlace) . "',\n";
    }

    $unitBet = 10;

    $toWin = array_values(array_unique(array_merge($favorites, $set2)));
    sort($toWin);
    if(count($runners) >= 10 && count($inter) >= 2 && count($favorites) >= 3 && count($set2) < 7){
        $racetext .= "\t\t'win($10)' => '" . implode(", ", $toWin) . "',\n"; 
        $totalBets = 10 * count($toWin);
        $totalPlace -= 10 * count($toWin);
        $totalRace = 0 - $totalBets;
        $racetext .= "\t\t'total bets' => $totalBets,\n";
        if(isset($officialWin)){
            if(!empty(array_intersect($toWin, array_slice($officialWin, 0, 1)))) {
                $totalRace += $winAmount;
                $totalPlace += $winAmount;
            }
            $racetext .= "\t\t'total won in race' => $totalRace,\n";
            $total += $totalRace;
        }
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($inter);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalPlace\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
