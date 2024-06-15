<?php

include 'condition.php';

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
$totalPlace = 0;
$totalQin = 0;
$totalTrio = 0;
$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

if(file_exists($oddsFile)) $numberOfRaces = count($allRacesOdds);
elseif(file_exists($outFile)) $numberOfRaces = count($oldData);
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
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
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    sort($runners);
    $racetext .= "\t\t'runners' => '" . implode(", ", $runners) . "',\n"; 
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
        $wincandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $qincandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
        if($firstSet) {
            $wininter = $wincandidates;
            $qininter = $qincandidates;
            $firstSet = false;
        }
        else {
            $wininter = array_intersect($wininter, $wincandidates);
            $qininter = array_intersect($qininter, $qincandidates);
        }
    }
    sort($wininter);
    sort($qininter);
    $wininter = array_intersect($favorites, $wininter);
    $qininter = array_intersect($favorites, $qininter);
    $pivots = [];
    $winpivots = [];
    $qinpivots = [];
    foreach($favorites as $F){
        foreach($favorites as $other){
            if($F !== $other){
                $candidates = array_intersect($history[$raceNumber][$other]["win"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $winpivots)) $winpivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["qin"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $qinpivots)) $qinpivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["trio"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $pivots)) $pivots[] = $F;
            }
        }
    }
    $racetext .= "\t\t'win inter' => '" . implode(", ", $wininter) . "',//count: " . count($wininter) . "\n";
    $racetext .= "\t\t'qin inter' => '" . implode(", ", $qininter) . "',\n";
    $racetext .= "\t\t'win pivots' => '" . implode(", ", $winpivots) . "',\n";
    $racetext .= "\t\t'qin pivots' => '" . implode(", ", $qinpivots) . "',\n";
    $racetext .= "\t\t'trio pivots' => '" . implode(", ", $pivots) . "',\n";
    $unitBet = 100;
    $compactExpr = count($wininter) . count($qininter) . count($winpivots) . count($qinpivots) . count($pivots);
    
    if(in_array($compactExpr, $favoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($favorites);
        $totalWin -= 1 * $unitBet * count($favorites);
    }
    if(in_array($compactExpr, $favoriteQin)){
        $racetext .= "\t\t'qin($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 20 * combination(2, count($favorites));
        $totalQin -= 20 * combination(2, count($favorites));
    }
    if(in_array($compactExpr, $favoriteTrio)){
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(3, count($favorites));
        $totalTrio -= 10 * combination(3, count($favorites));
    }
    if(in_array($compactExpr, $smallestFavoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . $favorites[0] . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet;
        $totalWin -= 1 * $unitBet;
    }
    if(in_array($compactExpr, $biggestFavoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . end($favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet;
        $totalWin -= 1 * $unitBet;
    }
    if(in_array($compactExpr, $smallestFavoritePlace)){
        $racetext .= "\t\t'place($" . 5 * $unitBet . ")' => '" .  $favorites[0]  . "',\n"; 
        $totalBets[$raceNumber] += 5 * $unitBet;
        $totalPlace -= 5 * $unitBet;
    }
    if(in_array($compactExpr, $biggestFavoritePlace)){
        $racetext .= "\t\t'place($" . 5 * $unitBet . ")' => '" .  end($favorites)  . "',\n"; 
        $totalBets[$raceNumber] += 5 * $unitBet;
        $totalPlace -= 5 * $unitBet;
    }
    $surePlace = [];
    foreach($placeCondition as $placer => $criteria){
        if(in_array($compactExpr, $criteria)){
            $surePlace[] = $placer;
            $racetext .= "\t\t'place($50)' => '" .  $placer  . "',\n"; 
            $totalBets[$raceNumber] += 50;
            $totalPlace -= 50;
        }
    }
    $surePlace = array_intersect($surePlace, $favorites);
    if(!empty($surePlace)) $racetext .= "\t\t'sure wp' => '" . implode(", ", $surePlace) . "',\n";
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $totalRace[$raceNumber] -= $totalBets[$raceNumber];
        $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
        if(in_array($compactExpr, $favoriteWin) && in_array($officialWin[0], $favorites)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'1 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(in_array($compactExpr, $favoriteQin) && count(array_intersect($favorites, array_slice($officialWin, 0, 2))) === 2){
            $totalRace[$raceNumber] += 2 * $qinAmount;
            $racetext .= "\t\t'2 won(qin bet)' => " . 2 * $qinAmount . ",\n";
            $totalQin += 2 * $qinAmount;
        }
        if(in_array($compactExpr, $smallestFavoriteWin) && $officialWin[0] == $favorites[0]){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'6 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(in_array($compactExpr, $biggestFavoriteWin) && $officialWin[0] == end($favorites)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'3 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(in_array($compactExpr, $smallestFavoritePlace) && in_array($favorites[0], array_slice($officialWin, 0, 3)) && isset($placeAmount[$favorites[0]])) {
            $totalRace[$raceNumber] += 1/2 * $unitBet * $placeAmount[$favorites[0]];
            $racetext .= "\t\t'7 won(place bet)' => " . 1/2 * $unitBet * $placeAmount[$favorites[0]] . ",\n";
            $totalPlace += 1/2 * $unitBet * $placeAmount[$favorites[0]];
        }
        if(in_array($compactExpr, $biggestFavoritePlace) && in_array(end($favorites), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($favorites)])) {
            $totalRace[$raceNumber] += 1/2 * $unitBet * $placeAmount[end($favorites)];
            $racetext .= "\t\t'4 won(place bet)' => " . 1/2 * $unitBet * $placeAmount[end($favorites)] . ",\n";
            $totalPlace += 1/2 * $unitBet * $placeAmount[end($favorites)];
        }
        if(in_array($compactExpr, $favoriteTrio) && count(array_intersect($favorites, array_slice($officialWin, 0, 3))) === 3){
            $totalRace[$raceNumber] += $trioAmount;
            $racetext .= "\t\t'5 won(trio bet)' => " . $trioAmount . ",\n";
            $totalTrio += $trioAmount;
        }
        foreach($placeCondition as $placer => $criteria){
            if(in_array($compactExpr, $criteria) && in_array($placer, array_slice($officialWin, 0, 3)) && isset($placeAmount[$placer])){
                $totalRace[$raceNumber] += 5 * $placeAmount[$placer];
                $racetext .= "\t\t'4P won(place bet $placer)' => " . 5 * $placeAmount[$placer] . ",\n";
                $totalPlace += 5 * $placeAmount[$placer];
            }
        }
        $racetext .= "\t\t'total won in race' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total trio: $totalTrio\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);