<?php

for($month = 1; $month <= 12; $month ++){
    if($month <= 9) $month = "0" . $month;
    for($day = 1; $day <= 31; $day ++){
        if($day <= 9) $day = "0" . $day;
        $outFile = $month . $day . ".php";
        $outtext = "<?php\n\n";
        $outtext .= "return [\n";
        for ($raceNumber = 1; $raceNumber <= 11; $raceNumber++) {
            $racetext = "\t'$raceNumber' => [\n";
            $racetext .= "\t\t/**\n";
            $racetext .= "\t\tRace $raceNumber\n";
            $racetext .= "\t\t*/\n";
            //randomly generate favorites
            $numberOfFavorites = rand(1, 5);
            $favorites = [];
            for($loop = 1; $loop <= $numberOfFavorites; $loop ++){
                $randomRunner = rand(1, 14);
                if(!in_array($randomRunner, $favorites)) $favorites[] = $randomRunner;
            }
            sort($favorites);
            $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
            //randomly generate winners
            $winners = [];
            while(count($winners) < 3){
                $randomWinner = rand(1, 14);
                if(!in_array($randomWinner, $winners)) $winners[] = $randomWinner;
            }
            $racetext .= "\t\t'official win' => '" . implode(", ", $winners) . "',\n"; 
            $racetext .= "\t],\n";
            $outtext .= $racetext;
        }
        $outtext .= "];\n";
        file_put_contents($outFile, $outtext);
    }
}





?>