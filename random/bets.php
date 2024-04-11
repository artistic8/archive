<?php

$raceDate = trim($argv[1]);
$raceDate = str_replace(".php", "", $raceDate);
$currentDir = __DIR__;

$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$matrix = include(__DIR__ . DIRECTORY_SEPARATOR . "matrix.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$raceDate.php";

$data = include($outFile);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= 11; $raceNumber++) {
    $favorites = explode(", ", $data[$raceNumber]['favorites']);
    $officialWin = explode(", ", $data[$raceNumber]['official win']);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(!empty($officialWin))  {
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
   
    $union = [];
    foreach($favorites as $F){
        $win = $history[$raceNumber][$F]['win'];
        $union = array_values(array_unique(array_merge($union, $win)));
    }
    sort($union);
    $racetext .= "\t\t'win hist' => '" . implode(", ", $union) . "',//count: " . count($union) . "\n"; 
    foreach($union as $candidate){
        foreach($favorites as $X){
            if(isset($matrix[$raceNumber][$X][$candidate]) && $matrix[$raceNumber][$X][$candidate] === true){
                $racetext .= "\t\t'place' => '" . $candidate . "',\n"; 
            }
        }
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);