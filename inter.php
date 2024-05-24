<?php
/**
 * Get winners for 'all inter' values and store in 'allinterwins.php' file
 */

 $outFile = __DIR__ . DIRECTORY_SEPARATOR . "allinterwins.php";
 $outtext = "<?php\n";
 $outtext .= "return [\n";
 
 $history = [];
    for($f = 1; $f <= 14; $f++){
    $history[$f] = [];
    }
 
 $dir = new DirectoryIterator(__DIR__);
 foreach ($dir as $fileinfo) {
     if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
         $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
         $bets = include($betsFile);
         foreach($bets as $raceNumber => $data){
             $inter = explode(", ", $data['all inter']);
             
             if(!isset($data['official win']) || empty($data['official win'])) continue;
             $winners = explode(", ", $data['official win']);
             foreach($inter as $I){
                 $history[$I]= array_values(array_unique(array_merge($history[$I], array_slice($winners, 0, 1))));
                 sort($history[$I]);
             }
         }
     }
 }
for($f = 1; $f <= 14; $f++){
    $outtext .= "\t$f => [\n" . implode(", ", $history[$f]) . "],\n";
}
 $outtext .= "];\n?>\n";
 file_put_contents($outFile, $outtext);
 
?>