<?php

$condition = [];
for($raceNumber = 1; $raceNumber <= 11; $raceNumber ++){
    $condition[$raceNumber] = ['favoritesWin' => [], 'allValuesWin' => []];
}

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
            $runners = array_filter(explode(", ", $data['runners']));
            $allValues = array_filter(explode(", ", $data['allValues']));
            $expr =  $data['count sets']; 
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array($winners[0], $favorites)){
                if(!isset($condition[$raceNumber]['favoritesWin'][$expr])) $condition[$raceNumber]['favoritesWin'][$expr] = true;
            }
            else $condition[$raceNumber]['favoritesWin'][$expr] = false;
            if(in_array($winners[0], $allValues)){
                if(!isset($condition[$raceNumber]['allValuesWin'][$expr])) $condition[$raceNumber]['allValuesWin'][$expr] = true;
            }
            else $condition[$raceNumber]['allValuesWin'][$expr] = false;
        }
    }
}

$outtext .= '$condition = [' . "\n";
for($raceNumber = 1; $raceNumber < 14; $raceNumber ++){
    if(!isset($condition[$raceNumber]['favoritesWin']) || !isset($condition[$raceNumber]['allValuesWin'])) continue;
    $outtext .= "\t$raceNumber => [\n";
    foreach($condition[$raceNumber]['favoritesWin'] as $key => $value){
        if($value === false || empty($key)) unset($condition[$raceNumber]['favoritesWin'][$key]);
    }
    foreach($condition[$raceNumber]['allValuesWin'] as $key => $value){
        if($value === false || empty($key)) unset($condition[$raceNumber]['allValuesWin'][$key]);
    }
    $favoritesWinKeys = array_filter(array_keys($condition[$raceNumber]['favoritesWin']));
    $allValuesWinKeys = array_filter(array_keys($condition[$raceNumber]['allValuesWin']));
    sort($favoritesWinKeys);
    sort($allValuesWinKeys);
    $outtext .= "\t\t'favoriteWin' => [" . implode(", ", array_filter($favoritesWinKeys)) . "],\n";
    $outtext .= "\t\t'allValuesWin' => [" . implode(", ", array_filter($allValuesWinKeys)) . "],\n";
    $outtext .= "\t],\n";
}
$outtext .= "];\n";


$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>
