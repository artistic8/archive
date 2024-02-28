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
        if(isset($oldData[$raceNumber]['winners'])) $oldWinners = explode(", ", $oldData[$raceNumber]['winners']);
        if(isset($oldData[$raceNumber]['historic'])) $oldHistoric = explode(", ", $oldData[$raceNumber]['historic']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldWinners)) $winners = $oldWinners;
    else $winners = [];

    if(isset($oldHistoric)) $historic = $oldHistoric;
    else $historic = [];
    
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
    $allTrioValues1 = [];
    $unionW = $win1;
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
        $unionW = array_values(array_unique(array_merge($unionW, $winF)));
    }
    //Sort  unionW by odds
    $qplsOdds = [];
    foreach($unionW as $iIndex){
       if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $unionW = array_keys($qplsOdds);
    $missing = array_diff($runners, $unionW);
    //Sort  missing by odds
    $qplsOdds = [];
    foreach($missing as $iIndex){
       if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $missing = array_keys($qplsOdds);
    //$racetext .= "\t\t'unionW(count: " . count($unionW) . ")' =>  '" . implode(", ", $unionW) . "',\n";
    //$racetext .= "\t\t'missing(count: " . count($missing) . ")' =>  '" . implode(", ", $missing) . "',\n";
    $newWinners = array_unique(array_values(array_merge(
        array_slice($unionW, 0, 3),
        array_slice($missing, 0, 3)
    )));
    $winners = array_unique(array_values(array_merge($winners, $newWinners)));
    foreach($winners as $keyX => $horse){
        if(!isset($allRacesOdds[$raceNumber][$horse])) unset($winners[$keyX]);
    }
    //sort $winners by odds
    $qplsOdds = [];
    foreach($winners as $iIndex){
       if(isset($allRacesOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allRacesOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $winners = array_keys($qplsOdds);
    $set1 = array_slice($winners, 0, 7);
    sort($winners);
    $set2 = array_slice($winners, 0, 7);
    $racetext .= "\t\t'winners' =>  '" . implode(", ", $winners) . "',//count: " . count($winners) . "\n";
    $totalWinners += count($winners);
    $set3 = array_intersect($set1, $set2);
    $set4 = array_unique(array_values(array_merge(
        array_slice($set2, 0, 4),
        array_slice($set3, 0, 4)
    )));
    $set5 = array_intersect($set3, $set4);
    $set5 = array_unique(array_values(array_merge($set5, $favorites)));
    sort($set5);
    $totalBets += count($set5);
    $racetext .= "\t\t'bet' =>  '" . implode(", ", $set5) . "',//count: " . count($set5) . "\n";
    $historic = array_unique(array_values(array_merge($historic, $set5)));
    sort($historic);
    $racetext .= "\t\t'historic' =>  '" . implode(", ", $historic) . "',//count: " . count($historic) . "\n";
    $totalHistoric += count($historic);
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$totalBets = 10 * $totalBets;
$totalHistoric = 10 * $totalHistoric;
$totalWinners = 10 * $totalWinners;
$outtext .= "\t//Total bets     = $totalBets HKD\n";
$outtext .= "\t//Total historic = $totalHistoric HKD\n";
$outtext .= "\t//Total winners  = $totalWinners HKD\n";
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
