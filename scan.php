<?php
if(isset($argv[1])) $type = trim($argv[1]);
else $type = "favorites";
$searchType = "place(end-$type";

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "history$type.php";

$HV = ["20240207", "20240215", "20240221", "20240228", "20240306", "20240313", "20240320", "20240327", "20240410", "20240417", "20240424", "20240501", "20240508", 
        "20240515", "20240522", "20240605", "20240612", "20240626", "20240704", "20240710", "20240911", "20240918",
    ];
$ST = ["20240212", "20240218", "20240225", "20240303", "20240310", "20240316", "20240324", "20240331", "20240403", "20240407", "20240414", "20240420", "20240428", 
       "20240505", "20240511", "20240519", "20240526", "20240529", "20240602", "20240608", "20240615", "20240623", "20240701", "20240706", "20240714", "20240908", 
       "20240915",  
    ];

$outtext = "<?php\n";
$outtext .= "return [\n";

$history = [];
for($f = 1; $f <= 14; $f++){
    $history[$f] = ['HV' => ['history' => []], 'ST' => ['history' => []]];
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
                            $history[$details]['HV']['history'][] = $data['official win'];
                        }
                        elseif(in_array($fileinfo->getFilename(), $ST)){
                            $history[$details]['ST']['history'][] = $data['official win'];
                        }
                    }
                }
            }
        }
    }
}
for($f = 1; $f <= 14; $f++){
    $venues = ['HV', 'ST'];
    foreach($venues as $venue){
        if(!empty($history[$f][$venue]['history'])){
            $winners = [];
            $first2 = [];
            $first3 = [];
            foreach($history[$f][$venue]['history'] as $selected){
                $results = explode(", ", $selected);
                if(!in_array($results[0], $winners)) $winners[] = $results[0];
                $first2 = array_values(array_unique(array_merge($first2, array_slice($results, 0, 2))));
                $first3 = array_values(array_unique(array_merge($first3, array_slice($results, 0, 3))));
            }
            sort($winners);
            sort($first2);
            sort($first3);
            $history[$f][$venue]['winners'] = implode(", ", $winners);
            $history[$f][$venue]['first2'] = implode(", ", $first2);
            $history[$f][$venue]['first3'] = implode(", ", $first3);
        }
    }
}
for($f = 1; $f <= 14; $f++){
    sort($history[$f]['HV']['history']);
    sort($history[$f]['ST']['history']);
    $outtext .= "\t$f => [\n";
    $outtext .= "\t\t'HV' => [\n";
    $outtext .= "\t\t\t'history' => [\n";
    foreach($history[$f]['HV']['history'] as $mystring) $outtext .= "\t\t\t\t'" . $mystring . "',\n";
    $outtext .= "\t\t\t],\n";
    if(isset($history[$f]['HV']['winners'])) $outtext .= "\t\t'winners' => '" . $history[$f]['HV']['winners'] . "',\n";
    if(isset($history[$f]['HV']['first2'])) $outtext .= "\t\t'first2'  => '" . $history[$f]['HV']['first2'] . "',\n";
    if(isset($history[$f]['HV']['first3'])) $outtext .= "\t\t'first3'  => '" . $history[$f]['HV']['first3'] . "',\n";
    $outtext .= "\t\t],\n";
    $outtext .= "\t\t'ST' => [\n";
    $outtext .= "\t\t\t'history' => [\n";
    foreach($history[$f]['ST']['history'] as $mystring) $outtext .= "\t\t\t\t'" . $mystring . "',\n";
    $outtext .= "\t\t\t],\n";
    if(isset($history[$f]['ST']['winners'])) $outtext .= "\t\t\t'winners' => '" . $history[$f]['ST']['winners'] . "',\n";
    if(isset($history[$f]['ST']['first2'])) $outtext .= "\t\t\t'first2'  => '" . $history[$f]['ST']['first2'] . "',\n";
    if(isset($history[$f]['ST']['first3'])) $outtext .= "\t\t\t'first3'  => '" . $history[$f]['ST']['first3'] . "',\n";
    $outtext .= "\t\t],\n";
    if(isset($history[$f]['HV']['first3']) && isset($history[$f]['ST']['first3'])){
        $hvFirst3= explode(", ", $history[$f]['HV']['first3']);
        $stFirst3= explode(", ", $history[$f]['ST']['first3']);
        $inter = array_intersect($hvFirst3, $stFirst3);
        if(!empty($inter)){
            $outtext .= "\t\t'inter first3 HV & ST' => '" . implode(", ", $inter) ."',\n";
        }
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>
