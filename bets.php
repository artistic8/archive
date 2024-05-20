<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
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
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    if(isset($allRacesOdds)){
        $winsArray = $allRacesOdds[$raceNumber];
        asort($winsArray);
        $runners = array_keys($winsArray);
        $favorite = $runners[0];
        if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    }
    else $runners = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
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
    $firstSet = true;
    foreach($favorites as $F){
        $candidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        if($firstSet) {
            $inter = $candidates;
            $firstSet = false;
        }
        else $inter = array_intersect($inter, $candidates);
    }
    $interF = array_intersect($favorites, $inter);
    if(count($interF) >= 2 && count($favorites) >= 3){
        $racetext .= "\t\t'win($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $racetext .= "\t\t'win($20)' => '" . implode(", ", array_slice($favorites, 1, 2)) . "',\n"; 
        $racetext .= "\t\t'qin/trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
    }
    elseif(count($favorites) > 3){
        foreach($favorites as $one){
            $win1 = array_intersect($history[$raceNumber][$one]["win"], $runners);
            foreach($favorites as $two){
                if($two > $one){
                    $win2 = array_intersect($history[$raceNumber][$two]["win"], $runners);
                    foreach($favorites as $three){
                        if($three > $two){
                            $win3 = array_intersect($history[$raceNumber][$three]["win"], $runners);
                            $intersection = array_intersect($win1, $win2, $win3, [$one, $two, $three]);
                            if(count($intersection) >= 2){
                                $racetext .= "\t\t'possible win' => '" . implode(", ", [$one, $two, $three]) . "',\n"; 
                            }
                        }
                    }
                }
            }
        }
    }
    $union = [];
    foreach($favorites as $one){
        foreach($favorites as $two){
            if($two > $one){
                $his1 = array_intersect($history[$raceNumber][$one]["win"], $runners);
                $his2 = array_intersect($history[$raceNumber][$two]["win"], $runners);
                $I = array_intersect($his1, $his2);
                $union = array_values(array_unique(array_merge($union, $I)));
            }
        }
    }
    if(!empty($union)){
        sort($union);
        $racetext .= "\t\t'union' => '" . implode(", ", $union) . "',//count: " . count($union) ."\n";
        $X = array_intersect($favorites, $union);
        $racetext .= "\t\t'inter' => '" . implode(", ", $X) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);