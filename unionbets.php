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

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$plaBetsFile = $currentDir . DIRECTORY_SEPARATOR . "plabets.php";
$winBetsFile = $currentDir . DIRECTORY_SEPARATOR . "winbets.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";

if(!file_exists($plaBetsFile) || !file_exists($winBetsFile) || !file_exists($winOddsFile)) exit("No bets files!!");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "unionbets.php";

$plaBets = include($plaBetsFile);
$winBets = include($winBetsFile);
$winOdds = include($winOddsFile);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = 0;

foreach($plaBets as $raceNumber => $racePlaBets) {
    $plaWinners = explode(", ", $racePlaBets['winners']);
    $winWinners = explode(", ", $winBets[$raceNumber]['winners']);
    $winners = array_unique(array_values(array_merge($plaWinners, $winWinners)));
    $totalBets += count($winners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'winners' =>  '" . implode(", ", $winners) . "',//count: " . count($winners) . "\n";

    $weights = [];
    foreach($winners as $winner){
        $weights[$winner] = $winOdds[$raceNumber][$winner];
    }
    $bets = getWeights($weights, 5);
    arsort($bets);
    $racetext .= "\t\t'Win Bets'  =>  [\n";
    $total = 0;
    foreach($bets as $horse => $bet){
        $racetext .= "\t\t\t'$horse' => '" . 10 * $bet . " HKD',\n"  ;
        $total += 10 * $bet;
    }
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t'Total Bets Race $raceNumber'  =>  '$total HKD',\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}
$totalBets = 10 * $totalBets;
$outtext .= "\t//Total bets = $totalBets HKD\n";
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
