<?php

$biggestFavoritePlace = [];
$place = [];
$placeKeys = [];
for($k = 1; $k <= 14; $k ++) $place[$k] = [];

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "condition.php";
$outtext = "<?php\n\n\n";

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $favorites = array_filter(explode(", ", $data['favorites']));
            $runners = array_filter(explode(", ", $data['runners']));
            $winInter = array_filter(explode(", ", $data['win inter']));
            $qinInter = array_filter(explode(", ", $data['qin inter']));
            $trioInter = array_filter(explode(", ", $data['trio inter']));
            $winPivots = array_filter(explode(", ", $data['win pivots']));
            $qinPivots = array_filter(explode(", ", $data['qin pivots']));
            $trioPivots = array_filter(explode(", ", $data['trio pivots']));
            $expr =  count($favorites) * (count($winInter) + count($qinInter) + count($trioInter));
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array(end($favorites), array_slice($winners, 0, 3))){
                if(!isset($biggestFavoritePlace[$expr])) $biggestFavoritePlace[$expr] = true;
            }
            else $biggestFavoritePlace[$expr] = false;
            for($k = 1; $k <= 14; $k++){
                if(in_array($k, array_slice($winners, 0, 3))){
                    if(!isset($place[$k][$expr])) $place[$k][$expr] = true;
                }
                else $place[$k][$expr] = false;
            }
        }
    }
}

for($k = 1; $k <= 14; $k++){
    foreach($place[$k] as $key => $value){
        if($value === false || empty($key)) unset($place[$k][$key]);
    }
}
foreach($biggestFavoritePlace as $key => $value){
    if($value === false || empty($key)) unset($biggestFavoritePlace[$key]);
}
$biggestFavoritePlaceKeys = array_filter(array_keys($biggestFavoritePlace));
for($k = 1; $k <= 14; $k++){
    $placeKeys[$k] = array_filter(array_keys($place[$k]));
    sort($placeKeys[$k]);
}
sort($biggestFavoritePlaceKeys);
$outtext .= '$biggestFavoritePlace =' . " [" . implode(", ", array_filter($biggestFavoritePlaceKeys)) . "];\n";
$outtext .= '$placeCondition' . " = [\n";
for($k = 1; $k <= 14; $k++) $outtext .= "\t$k => [" . implode(", ", array_filter($placeKeys[$k])) . "],\n";
$outtext .= "];\n";
$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>
