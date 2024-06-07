<?php
$compact = [];
$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            if(isset($data['win check']) && isset($data['qin check']) && isset($data['trio check']) && in_array($winners[0], $favorites)) {
                $expr = count(explode(", ", $data['win check'])) . count(explode(", ", $data['qin check'])) . count(explode(", ", $data['trio check']));
                if(!in_array($expr, $compact)) $compact[] = $expr;
                
            }
        }
    }
}
sort($compact);
foreach($compact as $what) echo $what . "\n";
?>
