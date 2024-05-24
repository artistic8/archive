<?php

$history = [];

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            $winners = explode(", ", $data['official win']);
            if(!isset($data['ratio'])) continue;
            $ratio = $data['ratio'];
            if(in_array($winners[0], $favorites)){
                if(!isset($history[$ratio])) $history[$ratio] = true;
            }
            else $history[$ratio] = false;
        }
    }
}
foreach($history as $key => $value){
    if($value === false) unset($history[$key]);
}
$keys = array_keys($history);
echo implode(", ", $keys) . "\n";
?>