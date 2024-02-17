<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

if(isset($argv[2])) $stage = trim($argv[2]);
else $stage = 1;

$step = "qinbets$stage";
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
    $qin1 = $raceData1['qin'];
    $allqinValues1 = [];
    foreach($qin1 as $qinItem){
        $allqinValues1 = array_values(array_unique(array_merge($allqinValues1, $qinItem)));
    }
    //Sort  allqinValues1 by odds
    $qplsOdds = [];
    foreach($allqinValues1 as $iIndex){
        if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allqinValues1 = array_keys($qplsOdds);
    // $qin1 = array_slice($allqinValues1, 0, 6);
    $qin1 = $allqinValues1;

    $unionF = $qin1;
    $interF = $qin1;
    foreach($favorites as $F){
        $raceDataF = $history[$raceNumber][$F];
        $qinF = $raceDataF['qin'];
        $allqinValuesF = [];
        foreach($qinF as $qinItemF){
           $allqinValuesF = array_values(array_unique(array_merge($allqinValuesF, $qinItemF)));
        }
        //Sort  allqinValuesF by odds
        $qplsOdds = [];
        foreach($allqinValuesF as $iIndex){
           if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
        }
        asort($qplsOdds);
        $allqinValuesF = array_keys($qplsOdds);
        //$allqinValuesF = array_slice($allqinValuesF, 0, 6);
        $unionF = array_values(array_unique(array_merge($unionF, $allqinValuesF)));
        $interF = array_intersect($interF, $allqinValuesF);
        $racetext .= "\t\t'qin values(Fav: $F)' =>  '" . implode(", ", $allqinValuesF) . "',\n";
    }
    //Sort  unionF by odds
    $qplsOdds = [];
    foreach($unionF as $iIndex){
       if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $unionF = array_keys($qplsOdds);
    $racetext .= "\t\t'unionF(count: " . count($unionF) . ")' =>  '" . implode(", ", $unionF) . "',\n";
    $racetext .= "\t\t'interF(count: " . count($interF) . ")' =>  '" . implode(", ", $interF) . "',\n";
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
