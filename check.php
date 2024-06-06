<?php

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            if(isset($data['check'])) {
                $check = explode(", ", $data['check']);
                if(count($check) >= 2) {
                    echo count(array_intersect($favorites, array_slice($winners, 0, 2))) . "\n";
                    if(count(array_intersect($favorites, array_slice($winners, 0, 2))) === 1) echo $fileinfo->getFilename() . ", Race " . $raceNumber . "\n" ;
                }
            }
        }
    }
}

?>
