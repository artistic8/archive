<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$threes = include(__DIR__ . DIRECTORY_SEPARATOR . "threes.php");
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
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    sort($favorites);
    $raceData1 = $history[$raceNumber][$favorite];
    $racetext = "";
   
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'Favorite'  =>  '$favorite',\n";   
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n";
    
    $bet = [];
    $union = [];
    foreach($favorites as $one){
        foreach($favorites as $two){
            if($two > $one){
                $index = "f$one-f$two";
                if(isset($threes[$raceNumber][$index])){
                    $bet[] = $one;
                    $bet[] = $two;
                    $threeSet = $threes[$raceNumber][$index];
                    $bet = array_values(array_unique(array_merge($bet, explode(", ", $threeSet))));
                    $racetext .= "\t\t'$index' => '" . $threeSet . "',\n";
                }
            }
        }
        foreach($runners as $horse){
            if($one == $horse) continue;
            if($one < $horse) 
              $index = "f$one-f$horse";
            else $index = "f$horse-f$one";
            if(isset($threes[$raceNumber][$index])){
                    $threeSet = $threes[$raceNumber][$index];
                    $union = array_values(array_unique(array_merge($union, explode(", ", $threeSet))));
                }
        }
    }
    if(!empty($bet)){
        sort($bet);
        $racetext .= "\t\t'bet' => '" . implode(", ", $bet) . "',\n";
    }
    if(!empty($union)){
        sort($union);
        $racetext .= "\t\t'union' => '" . implode(", ", $union) . "',\n";
    }
    $unionCF = [];
    foreach($runners as $horse){
            if($favorite == $horse) continue;
            if($favorite < $horse) 
              $index = "f$favorite-f$horse";
            else $index = "f$horse-f$favorite";
            if(isset($threes[$raceNumber][$index])){
                    $threeSet = $threes[$raceNumber][$index];
                    $unionCF = array_values(array_unique(array_merge($unionCF, explode(", ", $threeSet))));
                }
    }
    if(!empty($unionCF)){
        sort($unionCF);
        $racetext .= "\t\t'union current favorite' => '" . implode(", ", $unionCF) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
