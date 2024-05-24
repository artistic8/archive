<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
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
        $winCandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $winUnion = array_values(array_unique(array_merge($winUnion, $winCandidates)));
        $trioCandidates = array_intersect($history[$raceNumber][$F]["trio"], $runners);
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
    $allInter = array_intersect($winInter, $trioInter, $favorites);
    $inter = array_intersect($allInter, $favorites);
    if(!empty($inter)) {
        $racetext .= "\t\t'inter' => '" . implode(", ", $inter) . "',\n"; 
        $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n"; 
        $racetext .= "\t\t'trio inter' => '" . implode(", ", $trioInter) . "',\n"; 
    }
    sort($trioUnion);
    $racetext .= "\t\t'trio union' => '" . implode(", ", $trioUnion) . "',\n"; 
    if(!empty($trioInter)){
        $ratio = round(count($trioUnion) / count($trioInter), 2);
        $racetext .= "\t\t'ratio' => $ratio,\n"; 
    }
    if(count($inter) > 1 && count($favorites) >= 3){
        $racetext .= "\t\t'win($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $racetext .= "\t\t'win($20)' => '" . implode(", ", array_slice($favorites, 1, 2)) . "',\n"; 
        $racetext .= "\t\t'qin/trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
    }
    
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
