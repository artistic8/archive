<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "allfavhistory.php";
$outtext = "<?php\n";
$outtext .= "return [\n";

$history = [];
for($r = 1; $r <=11; $r++) $history[$r] = [];

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = $data['favorites'];
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = $data['official win'];
            if(!isset($history[$raceNumber][$favorites])) $history[$raceNumber][$favorites] = [$winners];
            else $history[$raceNumber][$favorites][] = $winners;
        }
    }
}

foreach($history as $r => $racecontents){
    ksort($racecontents);
    $outtext .= "\t'$r' => [\n";
    foreach($racecontents as $favs => $contents){
        $outtext .= "\t\t'$favs' => [";
        $position = 0;
        foreach($contents as $occurence) {
            if($position < count($contents) - 1) $outtext .= "[" . $occurence ."], ";
            $position ++;
        }
        $outtext .= "[" . end($contents) ."]";
        $outtext .= "],\n";
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>
