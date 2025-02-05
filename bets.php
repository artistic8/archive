
<?php

require 'functions.php';

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);

if(isset($argv[2])) $revision = trim($argv[2]);
else $revision = "";

$step = "bets$revision";
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history$revision.php");

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact;
}
function combination($p, $n){
    if($n < $p) return 0;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

$total = 0;
$totalPlaceEndF = 0;
$totalPlaceEndW = 0;
$totalPlaceW = 0;
$totalSurePlace = 0;
$totalWin = 0;

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
        if($firstSet) {
            $winInter = $wincandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $wincandidates);
        }
    }
    sort($winInter);
    $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n";
    $unitBet = 100;
    $condition2 = !empty($winInter);
    $racetext .= "\t\t'bets' => [\n";
    if(count($favorites) > 1 && !empty($winInter) && empty(array_intersect($winInter, $favorites))) {
        $union = array_values(array_unique(array_merge($winInter, $favorites)));
        sort($union);
        if(count($union) === 4){
            $racetext .= "\t\t\t'win(union $revision)' => '" . implode(", ", $union) . "',\n"; 
            $totalBets[$raceNumber] += $unitBet * count($union);
            $totalWin -= $unitBet * count($union);
            if(isset($officialWin) && in_array($officialWin[0], $union)){
                $totalRace[$raceNumber] += 1/10 * $unitBet * $winAmount;
                $racetext .= "\t\t\t'1 won(win bet)' => " . 1/10 * $unitBet * $winAmount . ",\n";
                $totalWin += 1/10 * $unitBet * $winAmount;
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
$outtext .= "//total place end favorites: $totalPlaceEndF\n";
$outtext .= "//total place end wp: $totalPlaceEndW\n";
$outtext .= "//total place wp: $totalPlaceW\n";
$outtext .= "//total sure place: $totalSurePlace\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
?>
