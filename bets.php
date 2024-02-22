<?php

function getWeights($odds, $profit = 0, $precision = 10){
    $weights = [];
    $totalWeights = 0;
    foreach($odds as $key => $value){
        $weights[$key] = 1;
        $totalWeights += $weights[$key];
    }
    $criterion = true;
    foreach($odds as $key => $value){
        $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
    }
    $iterations = 0;
    while($criterion === false){
        $criterion = true;
        foreach($odds as $key => $value){
            if($weights[$key] * $odds[$key] < $totalWeights + $profit){
                $weights[$key] +=1;
                $totalWeights += 1;
            }
            $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
        }
        $iterations ++;
        if($iterations == $precision) {
            $failed = [];
            foreach($odds as $key => $value) $failed[$key] = 0;
            return $failed;
        }
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

if(isset($argv[2])) $type = trim($argv[2]);
else $type = "pla";

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . $type . "odds.php");
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)){
    $winOdds = include($winOddsFile);
}
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = 0;

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['winners'])) $oldWinners = explode(", ", $oldData[$raceNumber]['winners']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldWinners)) $winners = $oldWinners;
    else $winners = [];
    
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
    sort($winners);
    $totalBets += count($winners);
    $racetext .= "\t\t'winners' =>  '" . implode(", ", $winners) . "',//count: " . count($winners) . "\n";

    if(isset($winOdds)){
        $weights = [];
        foreach($winners as $winner){
            $weights[$winner] = $winOdds[$raceNumber][$winner];
        }
        $bets = getWeights($weights, 1);
        $racetext .= "\t\t'Win Bets'  =>  [\n";
        $total = 0;
        foreach($bets as $horse => $bet){
            $racetext .= "\t\t\t'$horse' => '" . 10 * $bet . " HKD',\n"  ;
            $total += 10 * $bet;
        }
        $racetext .= "\t\t],\n";
        $racetext .= "\t\t'Total Bets Race $raceNumber'  =>  '$total HKD',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$totalBets = 10 * $totalBets;
$outtext .= "\t//Total bets = $totalBets HKD\n";
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
