<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "goodOnes.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$matrix = [];
for($i = 1; $i <= 11; $i++){
    $matrix[$i] = [];
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['place'])) continue;
            $placers = explode(", ", $data['place']);
            $result = explode(", ", $data['official win']);
            $inter = array_intersect($placers, $result);
            foreach($inter as $good){
                if(!isset($matrix[$raceNumber][$good])) $matrix[$raceNumber][$good] = true;
            }
            $diff = array_diff($placers, $result);
            foreach($diff as $bad){
                $matrix[$raceNumber][$bad] = false;
            }
        }
    }
}
$goodOnes = [];
for($i = 1; $i <= 11; $i++){
    $list = $matrix[$i];
    foreach($list as $k => $value){
        if($value === true) $goodOnes[$i][] = $k;
    }
}
for($i = 1; $i <= 11; $i++){
    if(isset($goodOnes[$i]) && !empty($goodOnes[$i])){
        sort($goodOnes[$i]);
        $outtext .= "\t$i => '" . implode(", ", $goodOnes[$i]) . "',\n";
    }
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);