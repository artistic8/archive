<?php

$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            $winners = explode(", ", $data['official win']);
            $his = explode(", ", $data['trio inter']);
            if(!empty(array_intersect(array_slice($winners, 0, 2), $his))) echo $fileinfo->getFilename() . " - Race $raceNumber" . "\n";
        }
    }
}

?>