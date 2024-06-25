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
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
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
        if($firstSet) {
            $winInter = $wincandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $wincandidates);
        }
    }
    sort($winInter);
    $winInter = array_intersect($favorites, $winInter);
    $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n";
    $unitBet = 100;
    $allValues = [];
    $winSets = [];
    foreach($runners  as $one){
        foreach($runners as $two){
            if($two > $one){
                foreach($runners as $three){
                    if($three > $two){
                        $set = [$one, $two, $three];
                        $temp = array_intersect($history[$raceNumber][$one]["win"], $history[$raceNumber][$two]["win"], $history[$raceNumber][$three]["win"], $runners);
                        $temp = array_intersect($set, $temp);
                        foreach($runners as $four){
                            if($four > $three){
                                $set = [$one, $two, $three, $four];
                                $temp = array_intersect($temp, $history[$raceNumber][$four]["win"]);
                                $temp = array_intersect($set, $temp);
                                if(count($temp) >= 2){
                                    $allValues = array_values(array_unique(array_merge($allValues, $set)));
                                    $winSets[] = $set;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    $racetext .= "\t\t'count sets' => " . count($winSets) . ",\n"; 
    sort($allValues);
    $racetext .= "\t\t'allValues' => '" . implode(", ", $allValues) . "',\n";
    if(count($favorites) >= 3 && count($winInter) >= 3){
        $racetext .= "\t\t'place($" . 2 * $unitBet . ")' => '" .  end($favorites)  . "',\n"; 
        $totalBets[$raceNumber] += 2 * $unitBet;
        $totalPlace -= 2 * $unitBet;
    }
    if(in_array(count($winSets), $favoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($favorites);
        $totalWin -= 1 * $unitBet * count($favorites);
    }
    if(in_array(count($winSets), $allValuesWin) && in_array(count(array_intersect($allValues, $favorites)), [2, 3])){
        $wp = array_intersect($allValues, $favorites);
        if(count($wp) === 2) $wp = range(1, $favorites[1]);
        if(count($wp) < 9){
            $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $wp) . "',\n"; 
            $totalBets[$raceNumber] += 1 * $unitBet * count($wp);
            $totalWin -= 1 * $unitBet * count($wp);
        }
        if(count($wp) === 3){
            $racetext .= "\t\t'place($" . 2 * $unitBet . ")' => '" . end($wp) . "',\n"; 
            $totalBets[$raceNumber] += 2 * $unitBet;
            $totalPlace -= 2 * $unitBet;
        }
    }
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $totalRace[$raceNumber] -= $totalBets[$raceNumber];
        $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
        if(in_array(count($winSets), $favoriteWin) && in_array($officialWin[0], $favorites)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'1 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(count($favorites) >= 3 && count($winInter) >= 3) {
            if(in_array(end($favorites), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($favorites)])){
                $totalRace[$raceNumber] += 2/10 * $unitBet * $placeAmount[end($favorites)];
                $racetext .= "\t\t'1 won(place bet)' => " . 2/10 * $unitBet * $placeAmount[end($favorites)] . ",\n";
                $totalPlace += 2/10 * $unitBet * $placeAmount[end($favorites)];
            }
        }
        if(in_array(count($winSets), $allValuesWin) && in_array(count(array_intersect($allValues, $favorites)), [2, 3])){
            $wp = array_intersect($allValues, $favorites);
            if(count($wp) === 2) $wp = range(1, $favorites[1]);
            if(count($wp) < 9 && in_array($officialWin[0], $wp)){
                $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
                $racetext .= "\t\t'2 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
                $totalWin += ($unitBet / 10) * $winAmount;
            }
            if(count($wp) === 3 && in_array(end($wp), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($wp)])){
                $totalRace[$raceNumber] += (2 * $unitBet / 10) * $placeAmount[end($wp)];
                $racetext .= "\t\t'2 won(place bet)' => " . (2 * $unitBet / 10) * $placeAmount[end($wp)] . ",\n";
                $totalPlace += (2 * $unitBet / 10) * $placeAmount[end($wp)];
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
