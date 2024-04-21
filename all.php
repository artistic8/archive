<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "placers.php";
$historyData = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$matrix = [];
for($i = 1; $i <= 11; $i++){
    for($j = 1; $j <= 14; $j++){
        $matrix[$i][$j] = [];
    }
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            $result = explode(", ", $data['official win']);
            foreach($favorites as $favorite){
                $history = $historyData[$raceNumber][$favorite]['win'];
                foreach($history as $candidate){
                    // for($candidate = 1; $candidate <= 14; $candidate ++){
                    if(in_array($candidate, $result)) {
                        if(!isset($matrix[$raceNumber][$favorite][$candidate])) $matrix[$raceNumber][$favorite][$candidate] = true;
                    }
                    else $matrix[$raceNumber][$favorite][$candidate] = false;
                }
            }
        }
    }
}
$placers = [];
for($i = 1; $i <= 11; $i++){
    for($j = 1; $j <= 14; $j++){
        if(isset($matrix[$i][$j]) && !empty($matrix[$i][$j])){
            $list = $matrix[$i][$j];
            foreach($list as $k => $value){
                if($value === true) $placers[$i][$j][] = $k;
            }
        }
    }
}

for($i = 1; $i <= 11; $i++){
    $outtext .= "\t$i => [\n";
    for($j = 1; $j <= 14; $j++){
        if(isset($placers[$i][$j]) && !empty($placers[$i][$j])){
            $outtext .= "\t\t$j => '" . implode(", ", $placers[$i][$j]) . "',\n";
        }
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
