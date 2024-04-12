<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "general";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$matrix = include(__DIR__ . DIRECTORY_SEPARATOR . "matrix.php");$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
         if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
    }
   
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    
    sort($runners);
    
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    
    if(!empty($officialWin))  {
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
   

    $L = [];
    $R = [];
    for($F = 1; $F <= count($runners); $F++){
      for($bo =1; $bo <= count($runners); $bo++){
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
