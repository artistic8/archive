<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "sorted";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $newFavorites = array_slice($runners, 0, 3);
    $favorites = array_values(array_unique(array_merge($favorites, $newFavorites)));
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    $union = [];
    foreach($favorites as $one){
        $win1 = array_intersect($history[$raceNumber][$one]['win'], $runners);
        // if(count($win1) < 6) continue;
        // $racetext .= "\t\t'win hist(fav $one)' => '" . implode(", ", $win1) . "',\n"; 
        foreach($favorites as $two){
            if($two > $one){
                $win2 = array_intersect($history[$raceNumber][$two]['win'], $runners);
                // if(count($win2) < 6) continue;
                $inter = array_intersect($win1, $win2);
                if(!empty($inter)){
                    $union = array_values(array_unique(array_merge($union, $inter)));
                    $racetext .= "\t\t'inter(fav $one, fav $two)' => '" . implode(", ", $inter) . "',\n"; 
                }
            }
        }
    }
    if(count($union) >= 3){
        sort($union);
        $racetext .= "\t\t'union' => '" . implode(", ", $union) . "',\n";
        if(count($favorites) >= 3 && !in_array(10, $favorites) && !in_array(10, $union)) {
            $racetext .= "\t\t'win' => '" . implode(", ", $favorites) . "',\n";
        }
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldAddedFavorites);
    unset($addedFavorites);
    unset($union);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);