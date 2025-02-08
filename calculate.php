<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "wontimes.php";
$outtext = "<?php\n";
$outtext .= "return [\n";

$results = [];
for($f = 1; $f <= 14; $f++){
    $results[$f] = 0;
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            $results[$winners[0]] ++;
        }
    }
}
arsort($results);
foreach($results as $f => $result){
    $outtext .= "\t\t$f => '" . $result . " times',\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>
