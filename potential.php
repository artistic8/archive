<?php

$inFile = __DIR__ . DIRECTORY_SEPARATOR . "matrix.php";
$outFile = __DIR__ . DIRECTORY_SEPARATOR . "possibilities.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

$matrix = include($inFile);

foreach($matrix as $raceNumber => $data){
    foreach($data as $favorite => $candidates){
        if($favorite % 2 === 0){
            foreach($candidates as $candidate => $bool){
                if($candidate === 2 && $bool === true){
                    $outtext .= "\t'Race $raceNumber, Fav $favorite, place 2',\n";
                }
            }
        }
        if($favorite % 3 === 0){
            foreach($candidates as $candidate => $bool){
                if($candidate === 3 && $bool === true){
                    $outtext .= "\t'Race $raceNumber, Fav $favorite, place 3',\n";
                }
            }
        }
    }
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
?>