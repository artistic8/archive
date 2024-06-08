<?php
$total = 0;
$totalWin = 0;
$totalPlace = 0;
$totalQin = 0;
$totalTrio = 0;
$monthly = [];
$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $month = substr($fileinfo->getFilename(), 0, 6);
        $contents = file_get_contents($betsFile);
        $contents = explode("\n", $contents);
        $contents = array_slice($contents, -6);
        $parts = explode(": ", $contents[0]);
        $totalWin += (float)$parts[1];
        $parts = explode(": ", $contents[1]);
        $totalPlace += (float)$parts[1];
        $parts = explode(": ", $contents[2]);
        $totalQin += (float)$parts[1];
        $parts = explode(": ", $contents[3]);
        $totalTrio += (float)$parts[1];
        $parts = explode(": ", $contents[4]);
        $total += (float)$parts[1];
        if(!isset($monthly[$month])) $monthly[$month] = (float)$parts[1];
        else $monthly[$month] += (float)$parts[1];
    }
}
ksort($monthly);
foreach($monthly as $key => $value){
    echo "Total $key: $value \n";
}
echo "Total win: " . $totalWin . "\n";
echo "Total place: " . $totalPlace . "\n";
echo "Total qin: " . $totalQin . "\n";
echo "Total trio: " . $totalTrio . "\n";
echo "Total: " . $total . "\n";
?>