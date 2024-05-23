<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$winHistory = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$trioHistory = include(__DIR__ . DIRECTORY_SEPARATOR . "triohistory.php");
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
    else {
        $runners = [];
        for($k = 1; $k < 31; $k++) $runners[] = $k;
    }
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
    $trioUnion = [];
    $winUnion = [];
    $firstSet = true;
    foreach($favorites as $F){
        $winCandidates = array_intersect($winHistory[$raceNumber][$F]["win"], $runners);
        $winUnion = array_values(array_unique(array_merge($winUnion, $winCandidates)));
        $trioCandidates = array_intersect($trioHistory[$raceNumber][$F]["win"], $runners);
        $trioUnion = array_values(array_unique(array_merge($trioUnion, $trioCandidates)));
        if($firstSet) {
            $winInter = $winCandidates;
            $trioInter = $trioCandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $winCandidates);
            $trioInter = array_intersect($trioInter, $trioCandidates);
        }
    }
    sort($winInter);
    sort($trioInter);
    $ratio = round(count($trioUnion) / count($winUnion), 2);
    $racetext .= "\t\t'ratio' => $ratio,\n";
    $winInter = array_intersect($favorites, $winInter);
    $trioInter = array_intersect($favorites, $trioInter);
    if(count($winInter) >= 2 && count($favorites) >= 3){
        $racetext .= "\t\t'win($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $racetext .= "\t\t'win($20)' => '" . implode(", ", array_slice($favorites, 1, 2)) . "',\n"; 
        $racetext .= "\t\t'qin/trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
    }
    if(count($trioInter) >= 2 && count($favorites) >= 3){
        $racetext .= "\t\t'win/qin/trio' => '" . implode(", ", $favorites) . "',\n"; 
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($inter);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
