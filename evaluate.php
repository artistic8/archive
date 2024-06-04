<?php
$total = 0;
$totalPlace = 0;
$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $contents = file_get_contents($betsFile);
        $contents = explode("\n", $contents);
        $contents = array_slice($contents, -3);
        $partsPlace = explode(": ", $contents[0]);
        $totalPlace += (float)$partsPlace[1];
        $parts = explode(": ", $contents[1]);
        $total += (float)$parts[1];
    }
}
echo "Total Place: " . $totalPlace . "\n";
echo "Total: " . $total . "\n";
?>