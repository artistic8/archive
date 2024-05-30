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
$totalWin = 0;
$totalQin = 0;
$totalPlace = 0;

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
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
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $firstSet = true;
    $union = [];
    foreach($favorites as $F){
        $candidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $union = array_values(array_unique(array_merge($union, $candidates)));
        if($firstSet) {
            $inter = $candidates;
            $firstSet = false;
        }
        else $inter = array_intersect($inter, $candidates);
    }
    sort($union);
    sort($inter);
    $inter = array_intersect($favorites, $inter);
    if(count($inter) >= 2 && count($favorites) >= 3){
        $unitBet = 10;
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $winbetAmountFavs = 1 * $unitBet * count($favorites);
        $totalWinBets = $winbetAmountFavs;
        // $set3 = array_slice($favorites, 0, 2);
        // $racetext .= "\t\t'win($" . 1 * $unitBet . ")' => '" . implode(", ", $set3) . "',\n"; 
        // $winbetAmountSet3 = 1 * $unitBet * count($set3);
        // $totalWinBets = $winbetAmountSet3;
        $racetext .= "\t\t'win bets' => $totalWinBets,\n";
        $racetext .= "\t\t'place($" . 1 * $unitBet . ")' => '" .implode(", ", $favorites) . "',\n"; 
        $plaBetAmount = 1 * $unitBet;
        $racetext .= "\t\t'place bets' => $plaBetAmount,\n";
        // $set2 = array_values(array_unique(array_merge($sums, $mults, $favorites)));
        // // $set2 = array_diff($set2, $favorites);
        // $racetext .= "\t\t'qin($10)' => '" . implode(", ", $favorites) . " X " . implode(", ", $set2)  . "',\n"; 
        // $qinbetAmount = 10 * count($favorites) * count($set2);
        // $racetext .= "\t\t'qin bets' => $qinbetAmount,\n";
        // $totalBets = $totalWinBets + $plaBetAmount + $qinbetAmount;
        $totalBets = $totalWinBets + $plaBetAmount;
        $racetext .= "\t\t'total bets' => $totalBets,\n";
        if(isset($officialWin)){
            if(!empty(array_intersect($favorites, array_slice($officialWin, 0, 1)))) $winwonAmount = ($unitBet / 10) * $winAmount - $winbetAmountFavs;
            else $winwonAmount = 0 - $winbetAmountFavs;
            $racetext .= "\t\t'win(favorites)' => $winwonAmount,\n";
            $totalWin += $winwonAmount;
            $total += $winwonAmount;
            // if(!empty(array_intersect($set3, array_slice($officialWin, 0, 1)))) $winwonAmount = (1 * $unitBet / 10) *$winAmount - $winbetAmountSet3;
            // else $winwonAmount = 0 - $winbetAmountSet3;
            // $racetext .= "\t\t'win(set3)' => $winwonAmount,\n";
            // $totalWin += $winwonAmount;
            // $total += $winwonAmount;
            if(!empty(array_intersect($favorites, array_slice($officialWin, 0, 3)))) $plaWonAmount = (1 * $unitBet / 10) * $placeAmount[end($favorites)] - $plaBetAmount;
            else $plaWonAmount = 0 - $plaBetAmount;
            $racetext .= "\t\t'place(favorites)' => $plaWonAmount,\n";
            $totalPlace += $plaWonAmount;
            $total += $plaWonAmount; 
            // if(count(array_intersect($favorites, array_slice($officialWin, 0, 2))) === 1 && count(array_intersect($set2, array_slice($officialWin, 0, 2))) === 1)
            //     $qinwonAmount = $qinAmount - $qinbetAmount;
            // else $qinwonAmount = 0 - $qinbetAmount;
            // $racetext .= "\t\t'qin(favorites X set2)' => $qinwonAmount,\n";
            // $totalQin += $qinwonAmount;
            // $total += $qinwonAmount;
        }
      }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($inter);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
