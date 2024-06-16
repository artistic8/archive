<?php

$favoritesWin = [];
$favoritesPlace = [];
$winInterWin = [];
$qinInterWin = [];
$trioInterWin = [];
$winInterPlace = [];
$qinInterPlace = [];
$trioInterPlace = [];
$favoritesQin = [];
$favoritesTrio = [];
$smallestFavoriteWin = [];
$biggestFavoriteWin = [];
$smallestFavoritePlace = [];
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
            $expr =  (count($winInter) + count($qinInter) + count($trioInter));
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            else $favoritesWin[$expr] = false;
            if(in_array($winners[0], $winInter)){
                if(!isset($winInterWin[$expr])) $winInterWin[$expr] = true;
            }
            else $winInterWin[$expr] = false;
            if(in_array($winners[0], $qinInter)){
                if(!isset($qinInterWin[$expr])) $qinInterWin[$expr] = true;
            }
            else $qinInterWin[$expr] = false;
            if(in_array($winners[0], $trioInter)){
                if(!isset($trioInterWin[$expr])) $trioInterWin[$expr] = true;
            }
            else $trioInterWin[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($winners, 0, 3)))){
                if(!isset($favoritesPlace[$expr])) $favoritesPlace[$expr] = true;
            }
            else $favoritesPlace[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($winInter, 0, 3)))){
                if(!isset($winInterPlace[$expr])) $winInterPlace[$expr] = true;
            }
            else $winInterPlace[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($qinInter, 0, 3)))){
                if(!isset($qinInterPlace[$expr])) $qinInterPlace[$expr] = true;
            }
            else $qinInterPlace[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($trioInter, 0, 3)))){
                if(!isset($trioInterPlace[$expr])) $trioInterPlace[$expr] = true;
            }
            else $trioInterPlace[$expr] = false;
            if($winners[0] == $favorites[0]){
                if(!isset($smallestFavoriteWin[$expr])) $smallestFavoriteWin[$expr] = true;
            }
            else $smallestFavoriteWin[$expr] = false;
            if($winners[0] == end($favorites)){
                if(!isset($biggestFavoriteWin[$expr])) $biggestFavoriteWin[$expr] = true;
            }
            else $biggestFavoriteWin[$expr] = false;
            if(in_array($favorites[0], array_slice($winners, 0, 3))){
                if(!isset($smallestFavoritePlace[$expr])) $smallestFavoritePlace[$expr] = true;
            }
            else $smallestFavoritePlace[$expr] = false;
            if(in_array(end($favorites), array_slice($winners, 0, 3))){
                if(!isset($biggestFavoritePlace[$expr])) $biggestFavoritePlace[$expr] = true;
            }
            else $biggestFavoritePlace[$expr] = false;
            if(count(array_intersect($favorites, array_slice($winners, 0, 2))) === 2) {
                if(!isset($favoritesQin[$expr])) $favoritesQin[$expr] = true;
            }
            else $favoritesQin[$expr] = false;
            if(count(array_intersect($favorites, array_slice($winners, 0, 3))) === 3) {
                if(!isset($favoritesTrio[$expr])) $favoritesTrio[$expr] = true;
            }
            else $favoritesTrio[$expr] = false;
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
foreach($favoritesWin as $key => $value){
    if($value === false || empty($key)) unset($favoritesWin[$key]);
}
foreach($favoritesPlace as $key => $value){
    if($value === false || empty($key)) unset($favoritesPlace[$key]);
}
foreach($winInterWin as $key => $value){
    if($value === false || empty($key)) unset($winInterWin[$key]);
}
foreach($winInterPlace as $key => $value){
    if($value === false || empty($key)) unset($winInterPlace[$key]);
}
foreach($qinInterWin as $key => $value){
    if($value === false || empty($key)) unset($qinInterWin[$key]);
}
foreach($qinInterPlace as $key => $value){
    if($value === false || empty($key)) unset($qinInterPlace[$key]);
}
foreach($trioInterWin as $key => $value){
    if($value === false || empty($key)) unset($trioInterWin[$key]);
}
foreach($trioInterPlace as $key => $value){
    if($value === false || empty($key)) unset($trioInterPlace[$key]);
}
foreach($favoritesQin as $key => $value){
    if($value === false || empty($key)) unset($favoritesQin[$key]);
}
foreach($favoritesTrio as $key => $value){
    if($value === false || empty($key)) unset($favoritesTrio[$key]);
}
foreach($smallestFavoriteWin as $key => $value){
    if($value === false || empty($key)) unset($smallestFavoriteWin[$key]);
}
foreach($biggestFavoriteWin as $key => $value){
    if($value === false || empty($key)) unset($biggestFavoriteWin[$key]);
}
foreach($smallestFavoritePlace as $key => $value){
    if($value === false || empty($key)) unset($smallestFavoritePlace[$key]);
}
foreach($biggestFavoritePlace as $key => $value){
    if($value === false || empty($key)) unset($biggestFavoritePlace[$key]);
}
$favoritesWinKeys = array_filter(array_keys($favoritesWin));
$winInterWinKeys = array_filter(array_keys($winInterWin));
$qinInterWinKeys = array_filter(array_keys($qinInterWin));
$trioInterWinKeys = array_filter(array_keys($trioInterWin));
$favoritesPlaceKeys = array_filter(array_keys($favoritesPlace));
$winInterPlaceKeys = array_filter(array_keys($winInterPlace));
$qinInterPlaceKeys = array_filter(array_keys($qinInterPlace));
$trioInterPlaceKeys = array_filter(array_keys($trioInterPlace));
$favoritesQinKeys = array_filter(array_keys($favoritesQin));
$favoritesTrioKeys = array_filter(array_keys($favoritesTrio));
$biggestFavoriteWinKeys = array_filter(array_keys($biggestFavoriteWin));
$smallestFavoriteWinKeys = array_filter(array_keys($smallestFavoriteWin));
$biggestFavoritePlaceKeys = array_filter(array_keys($biggestFavoritePlace));
$smallestFavoritePlaceKeys = array_filter(array_keys($smallestFavoritePlace));
for($k = 1; $k <= 14; $k++){
    $placeKeys[$k] = array_filter(array_keys($place[$k]));
    sort($placeKeys[$k]);
}
sort($favoritesWinKeys);
sort($winInterWinKeys);
sort($qinInterWinKeys);
sort($trioInterWinKeys);
sort($favoritesPlaceKeys);
sort($winInterPlaceKeys);
sort($qinInterPlaceKeys);
sort($trioInterPlaceKeys);
sort($favoritesQinKeys);
sort($favoritesTrioKeys);
sort($smallestFavoriteWinKeys);
sort($biggestFavoriteWinKeys);
sort($smallestFavoritePlaceKeys);
sort($biggestFavoritePlaceKeys);
$outtext .= '$favoriteWin = ' . "[" . implode(", ", array_filter($favoritesWinKeys)) . "];\n";
$outtext .= '$winInterWin = ' . "[" . implode(", ", array_filter($winInterWinKeys)) . "];\n";
$outtext .= '$qinInterWin = ' . "[" . implode(", ", array_filter($qinInterWinKeys)) . "];\n";
$outtext .= '$trioInterWin = ' . "[" . implode(", ", array_filter($trioInterWinKeys)) . "];\n";
$outtext .= '$favoritePlace = ' . "[" . implode(", ", array_filter($favoritesPlaceKeys)) . "];\n";
$outtext .= '$winInterPlace = ' . "[" . implode(", ", array_filter($winInterPlaceKeys)) . "];\n";
$outtext .= '$qinInterPlace = ' . "[" . implode(", ", array_filter($qinInterPlaceKeys)) . "];\n";
$outtext .= '$trioInterPlace = ' . "[" . implode(", ", array_filter($trioInterPlaceKeys)) . "];\n";
$outtext .= '$favoriteQin =' . " [" . implode(", ", array_filter($favoritesQinKeys)) . "];\n";
$outtext .= '$favoriteTrio =' . " [" . implode(", ", array_filter($favoritesTrioKeys)) . "];\n";
$outtext .= '$smallestFavoriteWin =' . " [" . implode(", ", array_filter($smallestFavoriteWinKeys)) . "];\n";
$outtext .= '$biggestFavoriteWin =' . " [" . implode(", ", array_filter($biggestFavoriteWinKeys)) . "];\n";
$outtext .= '$smallestFavoritePlace =' . " [" . implode(", ", array_filter($smallestFavoritePlaceKeys)) . "];\n";
$outtext .= '$biggestFavoritePlace =' . " [" . implode(", ", array_filter($biggestFavoritePlaceKeys)) . "];\n";
$outtext .= '$placeCondition' . " = [\n";
for($k = 1; $k <= 14; $k++) $outtext .= "\t$k => [" . implode(", ", array_filter($placeKeys[$k])) . "],\n";
$outtext .= "];\n";
$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>
