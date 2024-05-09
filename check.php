<?php

$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            $winners = explode(", ", $data['official win']);
            foreach($favorites as $favorite){
                $his = $history[$raceNumber][$favorite]["win"];
                if(!in_array($winners[0], $his)) echo $fileinfo->getFilename() . " - Race $raceNumber" . "\n";
            }
        }
    }
}

?>