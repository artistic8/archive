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
                    $raceFolder = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
                    if(!is_dir($raceDate)) exec("mkdir $raceFolder");
                    $betsFile = $raceFolder . DIRECTORY_SEPARATOR . "bets.php";  
                    if(!file_exists($betsFile)){  
                        $outtext = "<?php\n\n";
                        $outtext .= "return [\n";
                        foreach($dayInfo as $raceNumber => $favorites){
                            $racetext = "";
                            $racetext .= "\t'$raceNumber' => [\n";
                            $racetext .= "\t\t/**\n";
                            $racetext .= "\t\tRace $raceNumber\n";
                            $racetext .= "\t\t*/\n";
                            $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
                            $racetext .= "\t\t'official win' => '',\n\t],\n"; 
                            $outtext .= $racetext;
                        }
                        $outtext .= "];\n";
                        file_put_contents($betsFile, $outtext);
                    }
                }
            }
        }
    }
}   

 ?>