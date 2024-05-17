<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "winhistory.php";
$outtext = "<?php\n";
$outtext .= "return [\n";

$history = [];
for($r = 1; $r <= 11; $r++){
    $history[$r] = [];
    for($f = 1; $f <= 30; $f++){
        $history[$r][$f] = [];
    }
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        if($bets === false) {var_dump($fileinfo->getFilename()); die();}
        foreach($bets as $raceNumber => $data){
            $favorites = explode(", ", $data['favorites']);
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            foreach($favorites as $favorite){
                if(!in_array($winners[0], $history[$raceNumber][$favorite])) $history[$raceNumber][$favorite][] = $winners[0];
            }
        }
    }
}
for($r = 1; $r <= 11; $r++){
    $outtext .= "\t$r => [\n";
    for($f = 1; $f <= 30; $f++){
        sort($history[$r][$f]);
        $outtext .= "\t\t$f => [\n\t\t\t'win' =>[";
        $outtext .= implode(", ", $history[$r][$f]);
        $outtext .= "]\n\t\t],\n";
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>