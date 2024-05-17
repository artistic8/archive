<?php

/**
 * 1. Read a file named 'favorites.php' in all folders of the form "artistic?/repository"
 * 2. The data in each 'favorites.php' file is organized as : $raceDate => [ $raceNumber => [list of favorites separated by ", " ]], 
 * $raceDate is of the form $year$month$day which equals the name of the folder in which the corresponding 'bets.php' file resides
 * 3. Read $raceDate/bets.php and for each race, either:
 * 3.1. Just output(echo) the list of favorites if the folder already exists and the list of favorites in 'bets.php' is different than the list in 'favorites.php'
 * Or
 * 3.2. Make the folder $raceDate if it doesn't exist and generate the 'bets.php' file and fill in the list of favorites for each race and an empty 'official win' field: 
 * $raceNumber =>['favorites' => [list ...], 'official win' => '']
 */
$dir1 = new DirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . "oldFavorites");
foreach ($dir1 as $fileinfo1) {
    if (!$fileinfo1->isDot() && $fileinfo1->isDir() && preg_match("/(artistic)[0-9]+$/", $fileinfo1->getFilename())) {
        $repositories = __DIR__ . DIRECTORY_SEPARATOR . "oldFavorites" . DIRECTORY_SEPARATOR . $fileinfo1->getFilename();
        $dir2 = new DirectoryIterator($repositories);
        foreach ($dir2 as $fileinfo2) {
            if (!$fileinfo2->isDot() && $fileinfo2->isDir()){
                $repository = $repositories . DIRECTORY_SEPARATOR . $fileinfo2->getFilename();
                $favsFile =  $repository . DIRECTORY_SEPARATOR . "favorites.php";
                $favsData = include($favsFile);
                foreach($favsData as $raceDate => $dayInfo){
                    echo $raceDate . "\n";
                    $raceFolder = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
                    $betsFile = $raceFolder . DIRECTORY_SEPARATOR . "bets.php";
                    $doNotskipFile = false;
                    if(file_exists($betsFile)){
                        $fileContents = include($betsFile);
                        foreach($fileContents as $theRace => $theData){
                            $favs = implode(", ", $dayInfo[$theRace]);
                            if(isset($theData['favorites']) && (strlen($favs) > strlen($theData['favorites']))){
                                $doNotskipFile = true;
                            }
                        }
                    }
                    if(!$doNotskipFile) continue;
                    if(!is_dir($raceFolder)) exec("mkdir $raceFolder");
                    ksort($dayInfo);
                    $raceDateFormat = substr($raceDate, 0, 4) . "/" . substr($raceDate, 4, 2) . "/" . substr($raceDate, 6, 2);
                    $results =  $oddsJSON = file_get_contents("https://racing.hkjc.com/racing/information/English/Racing/ResultsAll.aspx?RaceDate=$raceDateFormat");
                    $results = str_replace('<td class="f_fs14">', '', $results); 
                    $results = str_replace(" ", '', $results); 
                    $results = str_replace("\t", '', $results); 
                    $results = str_ireplace("\x0D", "", $results); 
                    $results = str_replace("</td>", '', $results); 
                    $parts = explode("\n", $results);
                    $tce = [];
                    foreach($parts as $key => $part){
                        if(strpos($part, "TIERCE")) $tce[] = str_replace(",", ", ", $parts[$key + 1]);
                    }
                    $tce = array_values($tce);  
                    $outtext = "<?php\n\n";
                    $outtext .= "return [\n";
                    foreach($dayInfo as $raceNumber => $favorites){
                        $racetext = "";
                        $racetext .= "\t'$raceNumber' => [\n";
                        $racetext .= "\t\t/**\n";
                        $racetext .= "\t\tRace $raceNumber\n";
                        $racetext .= "\t\t*/\n";
                        $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
                        if(!isset($tce[$raceNumber - 1] )){
                            var_dump($raceDate);
                            var_dump($raceNumber);
                            var_dump($tce); die();
                        }
                        $racetext .= "\t\t'official win' => '" . $tce[$raceNumber - 1] ."',\n\t],\n"; 
                        $outtext .= $racetext;
                    }
                    $outtext .= "];\n";
                    file_put_contents($betsFile, $outtext);
                }
            }
        }
    }
}   

 ?>