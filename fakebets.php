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
$step = "fakebets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$inFile = $currentDir . DIRECTORY_SEPARATOR . "bets.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(!file_exists($inFile)) exit();

if(!file_exists($outFile)){
    $oldData = include($inFile);
}
else $oldData = include($outFile);

if(file_exists($oddsFile)) $totalRaces = count($allRacesOdds);
elseif(file_exists($inFile)) $totalRaces = count($oldData);
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    $favorites = explode(", ", $oldData[$raceNumber]['favorites']);
    if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
    if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
    if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
    if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
    if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    //get the favorite with the highest odd and build an array $fakeFavorites that contains all runners that have better odds than that one
    $qplOdds = [];
    foreach($favorites as $FF){
        $qplOdds[$FF] = $winsArray[$FF];
    }
    asort($qplOdds);
    $sortedFavorites = array_keys($qplOdds);
    $highestF = end($sortedFavorites);
    $favorites = [];
    foreach($runners as $horse){
        if($winsArray[$horse] <= $winsArray[$highestF]) $favorites[] = $horse;
    }
    sort($favorites);
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
    foreach($favorites as $F){
        $candidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
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
    if(count($runners) >= 10 && count($inter) >= 2 && count($favorites) >= 3){
        $racetext .= "\t\t'qin($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets = 20 * combination(2, count($favorites));
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets += 10 * combination(3, count($favorites));
        $unitBet = 70;
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets += 1 * $unitBet * count($favorites);
        $set3 = array_slice($favorites, 1, 2);
        $racetext .= "\t\t'win($" . 1 * $unitBet . ")' => '" . implode(", ", $set3) . "',\n"; 
        $totalBets += 1 * $unitBet * count($set3);
        // $racetext .= "\t\t'place($" . 1 * $unitBet . ")' => '" .implode(", ", $favorites) . "',\n"; 
        // $plaBetAmount = 1 * $unitBet * count($favorites);
        $totalRace = 0 - $totalBets;
        $racetext .= "\t\t'total bets' => $totalBets,\n";
        if(isset($officialWin)){
            if(count(array_intersect($favorites, array_slice($officialWin, 0, 2))) === 2) $totalRace += 2 * $qinAmount;
            if(count(array_intersect($favorites, array_slice($officialWin, 0, 3))) === 3) $totalRace += 2 * $trioAmount;
                    $totalRace += $qinAmount;
            if(!empty(array_intersect($favorites, array_slice($officialWin, 0, 1)))) $totalRace += ($unitBet / 10) * $winAmount;
            if(!empty(array_intersect($set3, array_slice($officialWin, 0, 1)))) $totalRace +=  ($unitBet / 10) * $winAmount;
            // if(!empty(array_intersect($favorites, array_slice($officialWin, 0, 3)))) {
            //     $plaWonAmount = 0 - $plaBetAmount;
            //     $placed = array_intersect($favorites, array_slice($officialWin, 0, 3));
            //     foreach($placed as $fuck){
            //         $plaWonAmount += (1 * $unitBet / 10) * $placeAmount[$fuck];
            //     }
            // }
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
$outtext .= "//fake total: $total\n";
file_put_contents($outFile, $outtext);