<?php

$favoritesWin = [];
$allValuesWin = [];

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "condition.php";
$outtext = "<?php\n\n\n";

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $favorites = array_filter(explode(", ", $data['favorites']));
            $allValues = array_filter(explode(", ", $data['allValues']));
            $expr =  $data['count sets'];
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            else $favoritesWin[$expr] = false;
            if(in_array($winners[0], $allValues)){
                if(!isset($allValuesWin[$expr])) $allValuesWin[$expr] = true;
            }
            else $allValuesWin[$expr] = false;
        }
    }
}

foreach($favoritesWin as $key => $value){
    if($value === false || empty($key)) unset($favoritesWin[$key]);
}
foreach($allValuesWin as $key => $value){
    if($value === false || empty($key)) unset($allValuesWin[$key]);
}
$favoritesWinKeys = array_filter(array_keys($favoritesWin));
$allValuesWinKeys = array_filter(array_keys($allValuesWin));
sort($favoritesWinKeys);
sort($allValuesWinKeys);
$outtext .= '$favoriteWin = ' . "[" . implode(", ", array_filter($favoritesWinKeys)) . "];\n";
$outtext .= '$allValuesWin = ' . "[" . implode(", ", array_filter($allValuesWinKeys)) . "];\n";
$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>
