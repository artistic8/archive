<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "favhistory.php";
$outtext = "<?php\n";
$outtext .= "return [\n";

$history = [];
$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            $favorites = $data['favorites'];
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $winners = explode(", ", $data['official win']);
            if(!isset($history[$favorites])){
                $history[$favorites] = [
                        "win" => array_slice($winners, 0, 1),
                        "qin" => array_slice($winners, 0, 2),
                        "trio" => array_slice($winners, 0, 3),
                ];
            }
            else{
                $history[$favorites]["win"] = array_values(array_unique(array_merge($history[$favorites]["win"], array_slice($winners, 0, 1))));
                $history[$favorites]["qin"] = array_values(array_unique(array_merge($history[$favorites]["qin"], array_slice($winners, 0, 2))));
                $history[$favorites]["trio"] = array_values(array_unique(array_merge($history[$favorites]["trio"], array_slice($winners, 0, 3))));
                sort($history[$favorites]["win"]);
                sort($history[$favorites]["qin"]);
                sort($history[$favorites]["trio"]);
            }
        }
    }
}
ksort($history);
foreach($history as $favs => $contents){
    $outtext .= "\t'$favs' => [\n";
    $outtext .= "\t\t'win' => [" . implode(", ", $contents["win"]) . "],\n";
    $outtext .= "\t\t'qin' => [" . implode(", ", $contents["qin"]) . "],\n";
    $outtext .= "\t\t'trio' => [" . implode(", ", $contents["trio"]) . "],\n";
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>\n";
file_put_contents($outFile, $outtext);

?>
