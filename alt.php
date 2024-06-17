<?php

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact;
}
function combination($p, $n){
    if($n < $p) return 0;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$total = 0;
$totalWin = 0;
$totalPlace = 0;
$totalTrio = 0;
$in = "bets";
$out = "alt";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$inFile = $currentDir . DIRECTORY_SEPARATOR . "$in.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$out.php";

if(file_exists($inFile)){
    $oldData = include($inFile);
    $numberOfRaces = count($oldData);
}
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
    $runners = explode(", ", $oldData[$raceNumber]['runners']);
    $favorites = explode(", ", $oldData[$raceNumber]['favorites']);
    if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
    if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
    if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
    if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
    if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'runners' => '" . implode(", ", $runners) . "',\n"; 
   
    if(isset($winAmount)){
        $racetext .= "\t\t'win amount' => " . $winAmount . ",\n"; 
    }
    if(isset($qinAmount)){
        $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    }
    if(isset($trioAmount)){
        $racetext .= "\t\t'trio amount' => " . $trioAmount . ",\n"; 
    }
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $allValues = [];
    $place = [];
    $sets = [];
    foreach($runners  as $one){
        foreach($runners as $two){
            if($two > $one){
                foreach($runners as $three){
                    if($three > $two){
                        $set = [$one, $two, $three];
                        $winInter = array_intersect($history[$raceNumber][$one]["win"], $history[$raceNumber][$two]["win"], $history[$raceNumber][$three]["win"], $runners);
                        $qinInter = array_intersect($history[$raceNumber][$one]["qin"], $history[$raceNumber][$two]["qin"], $history[$raceNumber][$three]["qin"], $runners);
                        $trioInter = array_intersect($history[$raceNumber][$one]["trio"], $history[$raceNumber][$two]["trio"], $history[$raceNumber][$three]["trio"], $runners);
                        $winInter = array_intersect($set, $winInter);
                        $qinInter = array_intersect($set, $qinInter);
                        $trioInter = array_intersect($set, $trioInter);
                        if(count($winInter) >= 3 && count($qinInter) >= 3 && count($trioInter) >= 3){
                            $racetext .= "\t\t'set' => '" . implode(", ", $set) . "',\n";
                            $allValues = array_values(array_unique(array_merge($allValues, $set)));
                            if(!in_array($three, $place)) $place[] = $three;
                            $sets[] = $set;
                        }
                    }
                }
            }
        }
    }
    $racetext .= "\t\t'count sets => " . count($sets) . ",\n"; 
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    if(!empty($place)) $racetext .= "\t\t'all place' => '" . implode(", ", $place) . "',\n";
    sort($allValues);
    $unitBet = 10;
    if(!empty($allValues)) $racetext .= "\t\t'all values' => '" . implode(", ", $allValues) . "',//count:" . count($allValues) . "\n";
    if(count($allValues) > 5){
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $allValues) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(3, count($allValues));
        $totalTrio -= 10 * combination(3, count($allValues));
        if(isset($officialWin)){
            $totalRace[$raceNumber] -= $totalBets[$raceNumber];
            $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
            if(count(array_intersect($allValues, array_slice($officialWin, 0, 3))) === 3){
                $totalRace[$raceNumber] += $trioAmount;
                $racetext .= "\t\t'5 won(trio bet)' => " . $trioAmount . ",\n";
                $totalTrio += $trioAmount;
            }
            $racetext .= "\t\t'total won in race' => " . $totalRace[$raceNumber] . ",\n";
            $total += $totalRace[$raceNumber];
        }
    }
    
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total alt win: $totalWin\n";
$outtext .= "//total alt place: $totalPlace\n";
// $outtext .= "//total qin: $totalQin\n";
$outtext .= "//total alt trio: $totalTrio\n";
$outtext .= "//total alt: $total\n";
file_put_contents($outFile, $outtext);
