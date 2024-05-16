<?php

$results =  $oddsJSON = file_get_contents("https://racing.hkjc.com/racing/information/English/Racing/ResultsAll.aspx?RaceDate=2022/01/05");
file_put_contents("reslt.html", $results);
die();

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $raceDate =  $fileinfo->getFilename();
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $raceDate . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(empty($data['official win'])){
                
            }
        }
    }
}

?>