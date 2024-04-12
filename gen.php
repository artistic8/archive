<?php

$outFile = "general.php";
$currentDir = __DIR__ ;

$matrix = include(__DIR__ . DIRECTORY_SEPARATOR . "matrix.php");

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= 11; $raceNumber++) {
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $L = [];
    $R = [];
    for($F = 1; $F <= 14; $F++){
      for($bo =1; $bo <= 14; $bo++){
            if(isset($matrix[$raceNumber][$F][$bo])){
                if($matrix[$raceNumber][$F][$bo] === true){
                  $L[] = $F;
                  $R[] = $bo;
                }
            }
        }
    }
   
    $inter = array_intersect($L, $R);
    if(!empty($inter)){
          $racetext .= "\t\t'bet' => '" . implode(", ", $inter) . "',\n"; 
    }
    $racetext .= "\t],\n";
   
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
