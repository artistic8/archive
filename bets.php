
<?php

require 'functions.php';

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);

if(isset($argv[2])) $revision = trim($argv[2]);
else $revision = "";

$step = "bets$revision";
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history$revision.php");

$total = 0;
$totalQin = 0;

$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
$allRacesOdds = include($oddsFile);
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$numberOfRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
        if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
        if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    if(empty($winsArray)) continue;
    asort($winsArray);
    $runners = array_keys($winsArray);
    if(isset($allWinOdds)){
        $tmpwinsArray = $allWinOdds[$raceNumber];
        asort($tmpwinsArray);
        $tmprunners = array_keys($tmpwinsArray);
        if(!in_array($tmprunners[0], $favorites)) $favorites[] = $tmprunners[0];
    }
    if(!in_array($runners[0], $favorites)) $favorites[] = $runners[0];
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    $racetext .= "\t\t'runners' => '" . implode(", ", $runners) . "',\n"; 
    foreach($runners as $runner){
        if(!isset($history[$raceNumber][$runner])) $history[$raceNumber][$runner] =  ["win" => [], "qin" => [], "trio" => []];
    }
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    
    if(isset($winAmount)){
        $racetext .= "\t\t'win amount' => " . $winAmount . ",\n"; 
    }
    if(isset($qinAmount)){
        $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    }
    if(isset($trioAmount)){
        $racetext .= "\t\t'trio amount' => " . $trioAmount . ",\n"; 
    }
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $firstSet = true;
    foreach($favorites as $F){
      $wincandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
      $qincandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
      $triocandidates = array_intersect($history[$raceNumber][$F]["trio"], $runners);
      if($firstSet) {
            $winInter = $wincandidates;
            $qinInter = $qincandidates;
            $trioInter = $triocandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $wincandidates);
            $qinInter = array_intersect($qinInter, $qincandidates);
            $trioInter = array_intersect($trioInter, $triocandidates);
        }
    }
    sort($winInter);
    sort($qinInter);
    sort($trioInter);
    if(count($favorites) > 1){
        $metric = count($winInter) . ":" . count($favorites) . ":" . count(array_intersect($winInter, $favorites));
        $racetext .= "\t\t'metric' => '$metric',\n";
        if(isset($officialWin)){
            $placeOutcomeInter = count(array_intersect($winInter, array_slice($officialWin, 0, 3)));
            $placeOutcomeFav = count(array_intersect($favorites, array_slice($officialWin, 0, 3)));
            $qinOutcomeInter = count(array_intersect($winInter, array_slice($officialWin, 0, 2)));
            $qinOutcomeFav = count(array_intersect($favorites, array_slice($officialWin, 0, 2)));
            $winOutcomeInter = count(array_intersect($winInter, array_slice($officialWin, 0, 1)));
            $winOutcomeFav = count(array_intersect($favorites, array_slice($officialWin, 0, 1)));
            $outcome = $placeOutcomeInter . ":" . $placeOutcomeFav . ":" . $qinOutcomeInter . ":" .  $qinOutcomeFav . ":" . $winOutcomeInter . ":" . $winOutcomeFav;
            $racetext .= "\t\t'outcome' => '$outcome',\n";
        }
    }
    $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n";
    $racetext .= "\t\t'qin inter' => '" . implode(", ", $qinInter) . "',\n";
    $racetext .= "\t\t'trio inter' => '" . implode(", ", $trioInter) . "',\n";
    $unitBet = 10;
    $racetext .= "\t\t'bets' => [\n";
    if(count($favorites) > 1 && !empty($winInter)) {
        $union = array_values(array_unique(array_merge($winInter, $favorites)));
        sort($union);
        if(in_array(count($union), [3, 4])){
            $racetext .= "\t\t\t'qin(union $revision)' => '" . implode(", ", $union) . "',\n"; 
            $totalBets[$raceNumber] += $unitBet * combination(2, count($union));
            $totalQin -= $unitBet * combination(2, count($union));
            if(isset($officialWin) && in_array($officialWin[0], $union) && in_array($officialWin[1], $union)){
                $totalRace[$raceNumber] += 1/10 * $unitBet * $qinAmount;
                $racetext .= "\t\t\t'1 won(qin bet)' => " . 1/10 * $unitBet * $qinAmount . ",\n";
                $totalQin += 1/10 * $unitBet * $qinAmount;
            }
        }
    }
    
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
    $totalRace[$raceNumber] -= $totalBets[$raceNumber];
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $racetext .= "\t\t'total won in race $raceNumber' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
?>
