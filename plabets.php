<?php

/**
 * Returns true if array $needle is contained in array of arrays $haystack 
 */
function in_my_array($needle, $haystack){
    foreach($haystack as $comparedTo){
        $shit1 = array_values($needle);
        $shit2 = array_values($comparedTo);
        $count1 = count($shit1);
        $count2 = count($shit2);
        if($count1 == $count2){
            $coincidences = 0;
            for($compt = 0; $compt < $count1; $compt++) {
                if($shit1[$compt] == $shit2[$compt]) $coincidences++;
            }
            if($coincidences == $count1) return true;
        }
    }
    return false;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "placebets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "placehistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = 0;
$totalWinners = 0;
$totalHistoric = 0;

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['WPs'])) $oldWPs = explode(", ", $oldData[$raceNumber]['WPs']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldWPs)) $WPs = $oldWPs;
    else $WPs = [];
    
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $raceData1 = $history[$raceNumber][$favorite];
    $racetext = "";
   
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'Favorite'  =>  '$favorite',\n";   
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n";
    $win1 = $raceData1['place'];
    $inter = $win1;
    foreach($favorites as $F){
        $raceDataF = $history[$raceNumber][$F];
        $winF = $raceDataF['place'];
        //Sort  winF by odds
        $qplsOdds = [];
        foreach($winF as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
        }
        asort($qplsOdds);
        $winF = array_keys($qplsOdds);
        //$racetext .= "\t\t'Win values(Fav: $F)' =>  '" . implode(", ", $winF) . "',\n";
        $inter = array_intersect($inter, $winF);
    }
    $inters = [];
    if(count($favorites) > 1){
        foreach($favorites as $one){
            $win1 = $history[$raceNumber][$one]['place'];
            foreach($favorites as $two){
                if($one != $two){
                    $win2 = $history[$raceNumber][$two]['place'];
                    $three = array_intersect($win1, $win2);
                    if(!empty($three) && !in_my_array($three, $inters)) $inters["F$one-F$two"] = $three;
                }
            }
        }
    }
    $intersText = "[";
    $someCounter = 0;
    $someLength = count($inters);
    foreach($inters as $intersItem){
        $intersText .= "[" . implode(", ", $intersItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $intersText .= ", ";
    }
    $intersText .= "]";
    $racetext .= "\t\t'inter' => '" . implode(", ", $inter) . "',\n";
    $racetext .= "\t\t'inters' =>  $intersText ,\n";
    if(count($favorites) > 1){
       $WP = array_intersect($inter, $favorites);
       $racetext .= "\t\t'WP' => '" . implode(", ", $WP) . "',\n";
       $WPs = array_unique(array_values(array_merge($WPs, $WP)));
       $racetext .= "\t\t'WPs' => '" . implode(", ", $WPs) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($oldWPs);
    unset($favorites);
    unset($WPs);
    unset($inter);
    $outtext .= $racetext;
}
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
