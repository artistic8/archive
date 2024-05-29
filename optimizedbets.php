<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$input = "bets";
$output = "optimizedbets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
$allRacesOdds = include($oddsFile);
$inFile = $currentDir . DIRECTORY_SEPARATOR . "$input.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$output.php";

$oldData = include($inFile);

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    $set1 = explode(", ", $oldData[$raceNumber]['favorites']);
    $set2 = explode(", ", $oldData[$raceNumber]['set2']);
    $all = array_values(array_unique(array_merge($set1, $set2)));
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    //find optimal win bets for horses in $all
   
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
