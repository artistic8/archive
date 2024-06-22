<?php

$favoritesWin = [];
$favoritesPlace = [];
$allValuesWin = [];
$allValuesPlace = [];
$allValuesQin = [];
$allValuesTrio = [];
$smallestFavoriteWin = [];
$biggestFavoriteWin = [];
$smallestFavoritePlace = [];
$biggestFavoritePlace = [];

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
            $allValues = array_filter(explode(", ", $data['allValues']));
            $expr =  $data['count win sets'];
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            else $favoritesWin[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($winners, 0, 3)))){
                if(!isset($favoritesPlace[$expr])) $favoritesPlace[$expr] = true;
            }
            else $favoritesPlace[$expr] = false;
            if(in_array($winners[0], $allValues)){
                if(!isset($allValuesWin[$expr])) $allValuesWin[$expr] = true;
            }
            else $allValuesWin[$expr] = false;
            if(!empty(array_intersect($allValues, array_slice($winners, 0, 3)))){
                if(!isset($allValuesPlace[$expr])) $allValuesPlace[$expr] = true;
            }
            else $allValuesPlace[$expr] = false;
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
            if(count(array_intersect($allValues, array_slice($winners, 0, 2))) === 2) {
                if(!isset($allValuesQin[$expr])) $allValuesQin[$expr] = true;
            }
            else $allValuesQin[$expr] = false;
            if(count(array_intersect($allValues, array_slice($winners, 0, 3))) === 3) {
                if(!isset($allValuesTrio[$expr])) $allValuesTrio[$expr] = true;
            }
            else $allValuesTrio[$expr] = false;
        }
    }
}

foreach($favoritesWin as $key => $value){
    if($value === false || empty($key)) unset($favoritesWin[$key]);
}
foreach($favoritesPlace as $key => $value){
    if($value === false || empty($key)) unset($favoritesPlace[$key]);
}
foreach($allValuesWin as $key => $value){
    if($value === false || empty($key)) unset($allValuesWin[$key]);
}
foreach($allValuesPlace as $key => $value){
    if($value === false || empty($key)) unset($allValuesPlace[$key]);
}
foreach($allValuesQin as $key => $value){
    if($value === false || empty($key)) unset($allValuesQin[$key]);
}
foreach($allValuesTrio as $key => $value){
    if($value === false || empty($key)) unset($allValuesTrio[$key]);
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
$favoritesPlaceKeys = array_filter(array_keys($favoritesPlace));
$allValuesWinKeys = array_filter(array_keys($allValuesWin));
$allValuesPlaceKeys = array_filter(array_keys($allValuesPlace));
$allValuesQinKeys = array_filter(array_keys($allValuesQin));
$allValuesTrioKeys = array_filter(array_keys($allValuesTrio));
$biggestFavoriteWinKeys = array_filter(array_keys($biggestFavoriteWin));
$smallestFavoriteWinKeys = array_filter(array_keys($smallestFavoriteWin));
$biggestFavoritePlaceKeys = array_filter(array_keys($biggestFavoritePlace));
$smallestFavoritePlaceKeys = array_filter(array_keys($smallestFavoritePlace));
sort($favoritesWinKeys);
sort($favoritesPlaceKeys);
sort($allValuesWinKeys);
sort($allValuesPlaceKeys);
sort($allValuesQinKeys);
sort($allValuesTrioKeys);
sort($smallestFavoriteWinKeys);
sort($biggestFavoriteWinKeys);
sort($smallestFavoritePlaceKeys);
sort($biggestFavoritePlaceKeys);
$outtext .= '$favoriteWin = ' . "[" . implode(", ", array_filter($favoritesWinKeys)) . "];\n";
$outtext .= '$favoritePlace = ' . "[" . implode(", ", array_filter($favoritesPlaceKeys)) . "];\n";
$outtext .= '$allValuesWin = ' . "[" . implode(", ", array_filter($allValuesWinKeys)) . "];\n";
$outtext .= '$allValuesPlace = ' . "[" . implode(", ", array_filter($allValuesPlaceKeys)) . "];\n";
$outtext .= '$allValuesQin =' . " [" . implode(", ", array_filter($allValuesQinKeys)) . "];\n";
$outtext .= '$allValuesTrio =' . " [" . implode(", ", array_filter($allValuesTrioKeys)) . "];\n";
$outtext .= '$smallestFavoriteWin =' . " [" . implode(", ", array_filter($smallestFavoriteWinKeys)) . "];\n";
$outtext .= '$biggestFavoriteWin =' . " [" . implode(", ", array_filter($biggestFavoriteWinKeys)) . "];\n";
$outtext .= '$smallestFavoritePlace =' . " [" . implode(", ", array_filter($smallestFavoritePlaceKeys)) . "];\n";
$outtext .= '$biggestFavoritePlace =' . " [" . implode(", ", array_filter($biggestFavoritePlaceKeys)) . "];\n";
$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>