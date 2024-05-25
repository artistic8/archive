<?php

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact; 
}

function combination($p, $n){
    if($p > $n) return 1;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$totalWonAmount = 0;

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
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
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
        for($k = 1; $k <= 14; $k++) $runners[] = $k;
    }
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(isset($officialWin)) $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    if(isset($winAmount)) $racetext .= "\t\t'win amount' => '" . $winAmount . "',\n"; 
    if(isset($qinAmount)) $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    $trioUnion = [];
    $winUnion = [];
    $qinUnion = [];
    $firstSet = true;
    foreach($favorites as $F){
        $winCandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $qinCandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
        $winUnion = array_values(array_unique(array_merge($winUnion, $winCandidates)));
        $qinUnion = array_values(array_unique(array_merge($qinUnion, $qinCandidates)));
        $trioCandidates = array_intersect($history[$raceNumber][$F]["trio"], $runners);
        $trioUnion = array_values(array_unique(array_merge($trioUnion, $trioCandidates)));
        if($firstSet) {
            $winInter = $winCandidates;
            $qinInter = $qinCandidates;
            $trioInter = $trioCandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $winCandidates);
            $qinInter = array_intersect($winInter, $qinCandidates);
            $trioInter = array_intersect($trioInter, $trioCandidates);
        }
    }
    $allInter = array_intersect($winInter, $qinInter, $trioInter);
    $inter = array_intersect($allInter, $favorites);
    
    $test = array_slice($trioInter, 3, 5);
    $racetext .= "\t\t'test set' => '" . implode(", ", $test) ."',//count:" . count($test) . "\n";
    $favs = array_intersect($test, $favorites);
    if(!empty($favs)) $racetext .= "\t\t'favs' => '" . implode(", ", $favs) ."',\n";
 
    if(count($test) >= 2){
        $betAmount = 10 * combination(2, count($test));
        if(count(array_intersect(array_slice($officialWin, 0, 2), $test)) === 2) $wonAmount = $qinAmount - $betAmount;
        else $wonAmount = 0 - $betAmount;
        $racetext .= "\t\t'won amount' => '" . $wonAmount . "',\n"; 
        $totalWonAmount += $wonAmount;
    }
    if(count($trioInter) > 7){
        $wp = array_slice($trioInter, 3, 3);
        $racetext .= "\t\t'wp' => '" . implode(", ", $wp) ."',\n"; 
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
$outtext .= "//Total won amount: $totalWonAmount\n";
file_put_contents($outFile, $outtext);
