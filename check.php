<?php

$favoritesWin = [];
$favoritesQin = [];
$favoritesTrio = [];
$biggestFavoriteWin = [];
$biggestFavoritePlace = [];

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "condition.php";
$outtext = "<?php\n";

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winInter = explode(", ", $data['win inter']);
            $qinInter = explode(", ", $data['qin inter']);
            $winPivots = explode(", ", $data['win pivots']);
            $qinPivots = explode(", ", $data['qin pivots']);
            $trioPivots = explode(", ", $data['trio pivots']);
            $expr = count($winInter) . count($qinInter) . count($winPivots) . count($qinPivots) . count($trioPivots);
            $winners = explode(", ", $data['official win']);
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            else $favoritesWin[$expr] = false;
            if($winners[0] == end($favorites)){
                if(!isset($biggestFavoriteWin[$expr])) $biggestFavoriteWin[$expr] = true;
            }
            else $biggestFavoriteWin[$expr] = false;
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
        }
    }
}
foreach($favoritesWin as $key => $value){
    if($value === false) unset($favoritesWin[$key]);
}
foreach($favoritesQin as $key => $value){
    if($value === false) unset($favoritesQin[$key]);
}
foreach($favoritesTrio as $key => $value){
    if($value === false) unset($favoritesTrio[$key]);
}
foreach($biggestFavoriteWin as $key => $value){
    if($value === false) unset($biggestFavoriteWin[$key]);
}
foreach($biggestFavoritePlace as $key => $value){
    if($value === false) unset($biggestFavoritePlace[$key]);
}
$favoritesWinKeys = array_keys($favoritesWin);
$favoritesQinKeys = array_keys($favoritesQin);
$favoritesTrioKeys = array_keys($favoritesTrio);
$biggestFavoriteWinKeys = array_keys($biggestFavoriteWin);
$biggestFavoritePlaceKeys = array_keys($biggestFavoritePlace);
sort($favoritesWinKeys);
sort($favoritesQinKeys);
sort($favoritesTrioKeys);
sort($biggestFavoriteWinKeys);
sort($biggestFavoritePlaceKeys);
$outtext .= '$favoriteWin = ' . "['" . implode("', '", $favoritesWinKeys) . "'];\n";
$outtext .= '$favoriteQin =' . " ['" . implode("', '", $favoritesQinKeys) . "'];\n";
$outtext .= '$favoriteTrio =' . " ['" . implode("', '", $favoritesTrioKeys) . "'];\n";
$outtext .= '$biggestFavoriteWin =' . " ['" . implode("', '", $biggestFavoriteWinKeys) . "'];\n";
$outtext .= '$biggestFavoritePlace =' . " ['" . implode("', '", $biggestFavoritePlaceKeys) . "'];\n";

file_put_contents($outFile, $outtext);
?>
