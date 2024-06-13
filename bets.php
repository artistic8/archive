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
$totalQin = 0;
$totalTrio = 0;
$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

if(file_exists($oddsFile)) $numberOfRaces = count($allRacesOdds);
elseif(file_exists($outFile)) $numberOfRaces = count($oldData);
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
        if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
        if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    sort($runners);
    $racetext .= "\t\t'runners' => '" . implode(", ", $runners) . "',\n"; 
    $nonFavorites = array_diff($runners, $favorites);
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
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
    $firstSet = true;
    foreach($favorites as $F){
        $wincandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $qincandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
        if($firstSet) {
            $wininter = $wincandidates;
            $qininter = $qincandidates;
            $firstSet = false;
        }
        else {
            $wininter = array_intersect($wininter, $wincandidates);
            $qininter = array_intersect($qininter, $qincandidates);
        }
    }
    sort($wininter);
    sort($qininter);
    $wininter = array_intersect($favorites, $wininter);
    $qininter = array_intersect($favorites, $qininter);
    $pivots = [];
    $winpivots = [];
    $qinpivots = [];
    foreach($favorites as $F){
        foreach($favorites as $other){
            if($F !== $other){
                $candidates = array_intersect($history[$raceNumber][$other]["win"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $winpivots)) $winpivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["qin"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $qinpivots)) $qinpivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["trio"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $pivots)) $pivots[] = $F;
            }
        }
    }
    $racetext .= "\t\t'win inter' => '" . implode(", ", $wininter) . "',\n";
    $racetext .= "\t\t'qin inter' => '" . implode(", ", $qininter) . "',\n";
    $racetext .= "\t\t'win pivots' => '" . implode(", ", $winpivots) . "',\n";
    $racetext .= "\t\t'qin pivots' => '" . implode(", ", $qinpivots) . "',\n";
    $racetext .= "\t\t'trio pivots' => '" . implode(", ", $pivots) . "',\n";
    $unitBet = 100;
    $compactExpr = count($wininter) . count($qininter) . count($winpivots) . count($qinpivots) . count($pivots);
    $favoriteWin = ['00012', '00023', '00033', '00111', '00133', '00144', '00223', '00444', '00555', '01022', '01223', '01234', '01245', '01255', '01333', '01334', '01444', '01455', '02223', '02233', '02344', '02445', '02455', '02555', '03555', '04566', '11133', '11444', '12223', '12233', '12334', '12344', '12355', '12555', '13244', '13333', '13455', '22233', '23233', '24444'];
    $favoriteQin = ['00023', '00033', '01223', '01255', '01455', '02344', '02445', '02555', '03555', '11444', '12223', '12344'];
    $favoriteTrio = ['01223', '01255', '02344', '02445', '02555', '12223', '12344'];
    $nonFavoriteWin = ['00022', '00112', '00113', '00222', '00333', '00666', '01000', '01023', '01111', '01112', '01113', '01122', '01123', '01144', '01222', '01344', '02222', '02777', '03133', '03233', '11244', '11344', '12123', '13444', '22344'];
    $nonFavoriteQin = ['00022', '00222', '01113', '01122', '01222', '12123', '22344'];
    $nonFavoriteTrio = ['01113', '12123'];
    $biggestFavoriteWin = ['00444', '02344', '02455', '11133', '12223', '12233', '22233'];
    $biggestFavoritePlace = ['00002', '00113', '00444', '00666', '01022', '01122', '01123', '01144', '01223', '01255', '02222', '02344', '02455', '11133', '11222', '12223', '12233', '12344', '22233', '22333', '22344', '23233', '33333'];
    $placeCondition = [
        1 => ['00023', '00113', '00133', '00555', '00666', '01022', '01023', '01113', '01122', '01333', '02777', '03555', '11344', '12223', '12444', '13233'],
        2 => ['00112', '00223', '01245', '01344', '02222', '02223', '02344', '02445', '04566', '12123', '12223', '12344', '13233', '13244', '24444'],
        3 => ['00023', '00444', '01023', '01133', '01144', '01223', '01344', '01455', '02222', '02455', '02555', '03133', '03233', '11133', '11444', '12233', '12344', '12555', '13455', '23444', '24444'],
        4 => ['00112', '00133', '00555', '01112', '01122', '01123', '01144', '01222', '01223', '02445', '03133', '03555', '04566', '11444', '12223', '12233', '12334'],
        5 => ['00023', '00223', '00666', '01113', '01255', '01334', '01455', '02344', '02445', '02777', '11222', '12123', '13244'],
        6 => ['00033', '01223', '01245', '03555', '11244', '12555'],
        7 => ['00012', '00033', '01123', '01255', '01455', '02777', '04566', '11444', '13244', '23233'],
        8 => ['01113', '01144', '02222', '03133', '11133', '11344', '12123', '12334', '12344', '13455'],
        9 => ['00033', '01022', '01245', '01334', '01344', '02133', '03233', '11133', '12334', '12355', '22344', '23233', '24444'],
        10 => ['00012', '00022', '00444', '01023', '01334', '03233', '11244', '12233', '22344'],
        11 => ['00113', '00333', '00444', '01112', '01122', '01255', '02455', '11223', '22344'],
        12 => ['00113', '00345', '00555', '00666', '01022', '01123', '02344', '02455', '11344', '22444'],
        13 => ['00012', '00112', '00223'],
        14 => ['13455'],
    ];
    
    if(in_array($compactExpr, $favoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($favorites);
        $totalWin -= 1 * $unitBet * count($favorites);
    }
    if(in_array($compactExpr, $favoriteQin)){
        $racetext .= "\t\t'qin($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 20 * combination(2, count($favorites));
        $totalQin -= 20 * combination(2, count($favorites));
    }
    if(in_array($compactExpr, $favoriteTrio)){
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(3, count($favorites));
        $totalTrio -= 10 * combination(3, count($favorites));
    }
    if(in_array($compactExpr, $biggestFavoriteWin)){
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . end($favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet;
        $totalWin -= 1 * $unitBet;
    }
    if(in_array($compactExpr, $biggestFavoritePlace)){
        $racetext .= "\t\t'place($" . 5 * $unitBet . ")' => '" .  end($favorites)  . "',\n"; 
        $totalBets[$raceNumber] += 5 * $unitBet;
        $totalPlace -= 5 * $unitBet;
    }
    if(in_array($compactExpr, $nonFavoriteWin)){
        $racetext .= "\t\t'win($10)' => '" . implode(", ", $nonFavorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * count($nonFavorites);
        $totalWin -= 10 * count($nonFavorites);
    }
    if(in_array($compactExpr, $nonFavoriteQin)){
        $racetext .= "\t\t'qin($10)' => '" . implode(", ", $nonFavorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(2, count($nonFavorites));
        $totalQin -= 20 * combination(2, count($nonFavorites));
    }
    if(in_array($compactExpr, $nonFavoriteTrio)){
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $nonFavorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(3, count($nonFavorites));
        $totalTrio -= 10 * combination(3, count($nonFavorites));
    }
    foreach($placeCondition as $placer => $criteria){
        if(in_array($compactExpr, $criteria)){
            $racetext .= "\t\t'place($50)' => '" .  $placer  . "',\n"; 
            $totalBets[$raceNumber] += 50;
            $totalPlace -= 50;
        }
    }
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $totalRace[$raceNumber] -= $totalBets[$raceNumber];
        $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
        if(in_array($compactExpr, $favoriteWin) && in_array($officialWin[0], $favorites)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'1 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(in_array($compactExpr, $favoriteQin) && count(array_intersect($favorites, array_slice($officialWin, 0, 2))) === 2){
            $totalRace[$raceNumber] += 2 * $qinAmount;
            $racetext .= "\t\t'2 won(qin bet)' => " . 2 * $qinAmount . ",\n";
            $totalQin += 2 * $qinAmount;
        }
        if(in_array($compactExpr, $biggestFavoriteWin) && $officialWin[0] == end($favorites)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'3 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
        if(in_array($compactExpr, $biggestFavoritePlace) && in_array(end($favorites), array_slice($officialWin, 0, 3))) {
            $totalRace[$raceNumber] += 1/2 * $unitBet * $placeAmount[end($favorites)];
            $racetext .= "\t\t'4 won(place bet)' => " . 1/2 * $unitBet * $placeAmount[end($favorites)] . ",\n";
            $totalPlace += 1/2 * $unitBet * $placeAmount[end($favorites)];
        }
        if(in_array($compactExpr, $favoriteTrio) && count(array_intersect($favorites, array_slice($officialWin, 0, 3))) === 3){
            $totalRace[$raceNumber] += $trioAmount;
            $racetext .= "\t\t'5 won(trio bet)' => " . $trioAmount . ",\n";
            $totalTrio += $trioAmount;
        }
        if(in_array($compactExpr, $nonFavoriteWin) && in_array($officialWin[0], $nonFavorites)){
            $totalRace[$raceNumber] += $winAmount;
            $racetext .= "\t\t'1N won(win bet)' => " . $winAmount . ",\n";
            $totalWin += $winAmount;
        }
        if(in_array($compactExpr, $nonFavoriteQin) && count(array_intersect($nonFavorites, array_slice($officialWin, 0, 2))) === 2){
            $totalRace[$raceNumber] += $qinAmount;
            $racetext .= "\t\t'2N won(qin bet)' => " . $qinAmount . ",\n";
            $totalQin += $qinAmount;
        }
        if(in_array($compactExpr, $nonFavoriteTrio) && count(array_intersect($nonFavorites, array_slice($officialWin, 0, 3))) === 3){
            $totalRace[$raceNumber] += $trioAmount;
            $racetext .= "\t\t'5N won(trio bet)' => " . $trioAmount . ",\n";
            $totalTrio += $trioAmount;
        }
        foreach($placeCondition as $placer => $criteria){
            if(in_array($compactExpr, $criteria) && in_array($placer, array_slice($officialWin, 0, 3)) && isset($placeAmount[$placer])){
                $totalRace[$raceNumber] += 5 * $placeAmount[$placer];
                $racetext .= "\t\t'4P won(place bet $placer)' => " . 5 * $placeAmount[$placer] . ",\n";
                $totalPlace += 5 * $placeAmount[$placer];
            }
        }
        $racetext .= "\t\t'total won in race' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total trio: $totalTrio\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
