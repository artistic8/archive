<?php

$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$outFile = __DIR__ . DIRECTORY_SEPARATOR . "threes.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($history as $raceNumber => $data){
    $outtext .= "\t$raceNumber => [\n";
    foreach($data as $one => $array1){
        $winners1 = $array1['win'];
        foreach($data as $two => $array2){
            $winners2 = $array2['win'];
            if($two > $one){
                $inter = array_intersect($winners1, $winners2);
                if(count($inter) === 3){
                    $outtext .= "\t\t'f$one-f$two' => '" . implode(", ", $inter) . "',\n";
                }
            }
        }
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);