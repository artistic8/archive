<?php
/**
 * Get winners for 'all inter' values and store in 'allinterwins.php' file
 */

 $outFile = __DIR__ . DIRECTORY_SEPARATOR . "allinterwins.php";
 $outtext = "<?php\n";
 $outtext .= "return [\n";
 
 $history = [];
 for($r = 1; $r <= 11; $r++){
    for($f = 1; $f <= 14; $f++){
        $history[$r][$f] = [];
    }
 }
 
 $dir = new DirectoryIterator(__DIR__);
 foreach ($dir as $fileinfo) {
     if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
         $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
         $bets = include($betsFile);
         foreach($bets as $raceNumber => $data){
            if(!isset($data['all inter'])) continue;
             $inter = explode(", ", $data['all inter']);
             if(!isset($data['official win']) || empty($data['official win'])) continue;
             $winners = explode(", ", $data['official win']);
             foreach($inter as $I){
                 $history[$raceNumber][$I]= array_values(array_unique(array_merge($history[$raceNumber][$I], array_slice($winners, 0, 1))));
                 sort($history[$raceNumber][$I]);
             }
         }
     }
 }
for($r = 1; $r <= 11; $r++){
    $outtext .= "\t$r => [\n";
    for($f = 1; $f <= 14; $f++){
         $outtext .= "\t\t$f => [" . implode(", ", $history[$r][$f]) . "],\n";
    }
    $outtext .= "\t],\n";
}
 $outtext .= "];\n?>\n";
 file_put_contents($outFile, $outtext);
 
?>