<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

if(isset($argv[2])) $stage = trim($argv[2]);
else $stage = 1;

$step = "plabets$stage";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesRunners = include($currentDir . DIRECTORY_SEPARATOR . "1.php");
$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "triohistory$stage.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesRunners);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesRunners[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['places'])) $oldPlaces = explode(", ", $oldData[$raceNumber]['places']);
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
    }
    if(isset($oldPlaces)) $places = $oldPlaces;
    else $places = [];
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    
    $runners = explode(", ", $allRacesRunners[$raceNumber]['Runners']);
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
    $trio1 = $raceData1['trio'];
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

    $unionF = $qin1;
    foreach($favorites as $F){
        $raceDataF = $history[$raceNumber][$F];
        $trioF = $raceDataF['trio'];
        $allTrioValuesF = [];
        foreach($trioF as $trioItemF){
           $allTrioValuesF = array_values(array_unique(array_merge($allTrioValuesF, $trioItemF)));
        }
        //Sort  allTrioValuesF by odds
        $qplsOdds = [];
        foreach($allTrioValuesF as $iIndex){
           if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
        }
        asort($qplsOdds);
        $allTrioValuesF = array_keys($qplsOdds);
        $allTrioValuesF = array_slice($allTrioValuesF, 0, 6);
        $unionF = array_values(array_unique(array_merge($unionF, $allTrioValuesF)));
        $racetext .= "\t\t'Trio values(Fav: $F)' =>  '" . implode(", ", $allTrioValuesF) . "',\n";
    }
    //Sort  unionF by odds
    $qplsOdds = [];
    foreach($unionF as $iIndex){
       if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $unionF = array_keys($qplsOdds);
    $racetext .= "\t\t'unionF(count: " . count($unionF) . ")' =>  '" . implode(", ", $unionF) . "',\n";
    if(count($unionF) >= 5){
        $place1 = $unionF[3];
        $place2 = $unionF[4];
        $racetext .= "\t\t'Place' =>  '" . $place1 . ", " . $place2 . "',\n";
        if(!in_array($place1, $places)) $places[] = $place1;
        if(!in_array($place2, $places)) $places[] = $place2;
    }
    
    if(!empty($places)){
        $racetext .= "\t\t'places' => '" . implode(", ", $places) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldPlaces);
    unset($oldFavorites);
    unset($places);
    unset($favorites);
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);