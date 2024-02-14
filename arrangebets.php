<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

if(isset($argv[2])) $stage = trim($argv[2]);
else $stage = 1;

$step = "arrangedbets$stage";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "plaodds.php");
$bets = include($currentDir . DIRECTORY_SEPARATOR . "plabets$stage.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$selectedOdds = [];

foreach ($bets as $raceNumber => $raceBets) {
    if(!isset($raceBets['Place'])) continue;
    $selected = $raceBets['Place'];
    if(!isset($allRacesOdds[$raceNumber][$selected])) continue;
    $sOdds = $allRacesOdds[$raceNumber][$selected];
    $selectedOdds["Race $raceNumber- Selected $selected(odds: $sOdds)"] = $sOdds;
}
asort($selectedOdds);

foreach($selectedOdds as $key => $odd){
    $outtext .= "\t'" . $key . "',\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);