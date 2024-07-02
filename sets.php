<?php

$raceDate = trim($argv[1]);

if(isset($argv[2])) $revision = trim($argv[2]);
else $revision = "";

include "condition$revision.php";
$step = "bets$revision";
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history$revision.php");

function getAllValues($runners, $raceNumber){
    global $history;
    $allValues = [];
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
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    // sort($allValues);
    return $allValues;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
$allRacesOdds = include($oddsFile);
$inFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "sets$revision.php";

if(file_exists($inFile)){
    $oldData = include($inFile);
}

$numberOfRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
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
    $allValues = getAllValues($runners, $raceNumber);
    if(!empty($allValues)) $values = $allValues;
    else $values = [];
    $copy = $runners;
    sort($copy);
    foreach($runners as $one){
        $runners = array_diff($runners, [$one]);
        $allValues = getAllValues($runners, $raceNumber);
        if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
        foreach($runners as $two){
            $runners = array_diff($runners, [$two]);
            $allValues = getAllValues($runners, $raceNumber);
            if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
            foreach($runners as $three){
                $runners = array_diff($runners, [$three]);
                $allValues = getAllValues($runners, $raceNumber);
                if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                foreach($runners as $four){
                    $runners = array_diff($runners, [$four]);
                    $allValues = getAllValues($runners, $raceNumber);
                    if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                    foreach($runners as $five){
                        $runners = array_diff($runners, [$five]);
                        $allValues = getAllValues($runners, $raceNumber);
                        if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                    }
                }
            }
        }
    }
    $runners = $copy;
    $allValues = getAllValues($runners, $raceNumber);
    if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
    foreach($runners as $one){
        $runners = array_diff($runners, [$one]);
        $allValues = getAllValues($runners, $raceNumber);
        if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
        foreach($runners as $two){
            $runners = array_diff($runners, [$two]);
            $allValues = getAllValues($runners, $raceNumber);
            if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
            foreach($runners as $three){
                $runners = array_diff($runners, [$three]);
                $allValues = getAllValues($runners, $raceNumber);
                if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                foreach($runners as $four){
                    $runners = array_diff($runners, [$four]);
                    $allValues = getAllValues($runners, $raceNumber);
                    if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                    foreach($runners as $five){
                        $runners = array_diff($runners, [$five]);
                        $allValues = getAllValues($runners, $raceNumber);
                        if(!empty($allValues)) $values = array_values(array_unique(array_merge($values, $allValues)));
                    }
                }
            }
        }
    }
    sort($values);
    if(!empty($values)) {
        $racetext .= "\t\t'values' => '" . implode(", ", $values) . "',\n";
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
