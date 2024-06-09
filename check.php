<?php

$favoritesWin = [];
$favoritesQin = [];
$favoritesTrio = [];
$biggestFavoriteWin = [];
$biggestFavoritePlace = [];

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            if(count(array_intersect($favorites, array_slice($winners, 0, 3))) === 3) {
                echo $fileinfo->getFilename() . ", Race: " . $raceNumber . "\n";
            }
        }
    }
}
?>
