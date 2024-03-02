<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
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
    $win1 = $raceData1['win'];
    $interW = $win1;
    foreach($favorites as $F){
        $raceDataF = $history[$raceNumber][$F];
        $winF = $raceDataF['win'];
        //Sort  winF by odds
        $qplsOdds = [];
        foreach($winF as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
        }
        asort($qplsOdds);
        $winF = array_keys($qplsOdds);
        //$racetext .= "\t\t'Win values(Fav: $F)' =>  '" . implode(", ", $winF) . "',\n";
        $interW = array_intersect($interW, $winF);
    }
    
    $racetext .= "\t\t'inter' => '" . implode(", ", $interW) . "',\n";
    $WP = array_intersect($interW, $favorites);
    $racetext .= "\t\t'WP' => '" . implode(", ", $WP) . "',\n";
    $WPs = array_unique(array_values(array_merge($WPs, $WP)));
    $racetext .= "\t\t'WPs' => '" . implode(", ", $WPs) . "',\n";
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($oldWPs);
    unset($favorites);
    unset($WPs);
    unset($interW);
    $outtext .= $racetext;
}
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
