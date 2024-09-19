<?php
if(isset($argv[1])) $type = trim($argv[1]);
else $type = "favorites";
$searchType = "place(end-$type";

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "history$type.php";

$HV = ["20240207", "20240215", "20240221", "20240228", "20240306", "20240313", "20240320", "20240327", "20240410", "20240417", "20240424", "20240501", "20240508", 
        "20240515", "20240522", "20240605", "20240612", "20240626", "20240704", "20240710", "20240911",
    ];
$ST = ["20240212", "20240218", "20240225", "20240303", "20240310", "20240316", "20240324", "20240331", "20240403", "20240407", "20240414", "20240420", "20240428", 
       "20240505", "20240511", "20240519", "20240526", "20240529", "20240602", "20240608", "20240615", "20240623", "20240701", "20240706", "20240714", "20240908", 
       "20240915",  
    ];

$outtext = "<?php\n";
$outtext .= "return [\n";

$history = [];
for($f = 1; $f <= 14; $f++){
    $history[$f] = ['HV' => [], 'ST' => []];
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $betsData = include($betsFile);
        foreach($betsData as $raceNumber => $data){
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $bets = $data['bets'];
            if(!empty($bets)){
                foreach($bets as $key => $details){
                    if(strpos($key, $searchType) === 0){
                        if(in_array($fileinfo->getFilename(), $HV)){
                            $history[$details]['HV'][] = $data['official win'];
                        }
                        elseif(in_array($fileinfo->getFilename(), $ST)){
                            $history[$details]['ST'][] = $data['official win'];
                        }
                    }
                }
            }
        }
    }
}
for($f = 1; $f <= 14; $f++){
    $outtext .= "\t$f => [\n";
    $outtext .= "\t\t'HV' => [\n";
    foreach($history[$f]['HV'] as $mystring) $outtext .= "\t\t\t\t'" . $mystring . "',\n";
    $outtext .= "\t\t],\n";
    $outtext .= "\t\t'ST' => [\n";
    foreach($history[$f]['ST'] as $mystring) $outtext .= "\t\t\t\t'" . $mystring . "',\n";
    $outtext .= "\t\t],\n";
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>
