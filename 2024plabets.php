<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "2024plabets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesRunners = include($currentDir . DIRECTORY_SEPARATOR . "1.php");
$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "plaodds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "2024triohistory.php");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

$totalRaces = count($allRacesRunners);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesRunners[$raceNumber])) continue;
    $runners = explode(", ", $allRacesRunners[$raceNumber]['Runners']);
    $favorite = $runners[0];
    $secondFavorite = $runners[1];
    $thirdFavorite = $runners[2];
    $raceData1 = $history[$raceNumber][$favorite];
    $raceData2 = $history[$raceNumber][$secondFavorite];
    $raceData3 = $history[$raceNumber][$thirdFavorite];
    $racetext = "";
   
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'Favorite'    =>  '$favorite',\n";   
    $trio1 = $raceData1['trio'];
    $trio2 = $raceData2['trio'];
    $trio3 = $raceData3['trio'];
    $allTrioValues1 = [];
    foreach($trio1 as $trioItem){
        $allTrioValues1 = array_values(array_unique(array_merge($allTrioValues1, $trioItem)));
    }
    //Sort  allTrioValues1 by odds
    $qplsOdds = [];
    foreach($allTrioValues1 as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allTrioValues1 = array_keys($qplsOdds);
    // $qin1 = array_slice($allTrioValues1, 0, 6);
    $qin1 = $allTrioValues1;
    
    $allTrioValues2 = [];
    foreach($trio2 as $trioItem2){
        $allTrioValues2 = array_values(array_unique(array_merge($allTrioValues2, $trioItem2)));
    }
    //Sort  allTrioValues2 by odds
    $qplsOdds = [];
    foreach($allTrioValues2 as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allTrioValues2 = array_keys($qplsOdds);
    // $qin2 = array_slice($allTrioValues2, 0, 6);
    $qin2 = $allTrioValues2;
    
    $allTrioValues3 = [];
    foreach($trio3 as $trioItem3){
        $allTrioValues3 = array_values(array_unique(array_merge($allTrioValues3, $trioItem3)));
    }
    //Sort  allTrioValues3 by odds
    $qplsOdds = [];
    foreach($allTrioValues3 as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allTrioValues3 = array_keys($qplsOdds);
    // $qin3 = array_slice($allTrioValues3, 0, 6);
    $qin3 = $allTrioValues3;
    $inter12 = array_values(array_intersect($qin1, $qin2));
    if(!empty($inter12)){
        $racetext .= "\t\t'inter12' =>  '" . implode(", ", $inter12) . "',\n";
    }
    $inter = array_values(array_intersect($qin1, $qin2, $qin3));
    if(!empty($inter)){
        $racetext .= "\t\t'inter' =>  '" . implode(", ", $inter) . "',\n";
        $racetext .= "\t\t'Place' =>  '" . $inter[0] . "',\n";
    }
    if(count($trio1) > 2 && count($trio2) >  2 && count($trio3) > 2){
        $racetext .= "\t\t// count > 2\n";
    }
    else{
        $racetext .= "\t\t// count < 2\n";
    }
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
