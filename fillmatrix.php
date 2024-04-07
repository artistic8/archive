<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "matrix.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";
$matrix = [];
for($i = 1; $i <= 12; $i++){
    $matrix[$i] = [];
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = $data['favorites'];
            $result = $data['official win'];
            $history = $data['win hist'];
            foreach($history as $candidate){
                if(in_array($candidate, $result)){
                    foreach($favorites as $favorite){
                        if(!isset($matrix[$favorite][$candidate])) $matrix[$favorite][$candidate] = true;
                    }
                }
                else $matrix[$favorite][$candidate] = false;
            }
        }
    }
}

$outtext .= "];\n";
file_put_contents($outFile, $outtext);
?>