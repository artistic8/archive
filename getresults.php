<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");
$raceDate = trim($argv[1]);
$raceFolder = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
if(!is_dir($raceFolder)) exec("mkdir $raceFolder");
$betsFile = $raceFolder . DIRECTORY_SEPARATOR . "bets.php";
$contents = include($betsFile);
$raceDateFormat = substr($raceDate, 0, 4) . "/" . substr($raceDate, 4, 2) . "/" . substr($raceDate, 6, 2);
$results =  $oddsJSON = file_get_contents("https://racing.hkjc.com/racing/information/English/Racing/ResultsAll.aspx?RaceDate=$raceDateFormat");
$results = str_replace('<td class="f_fs14 f_tar">', '', $results); 
$results = str_replace('<td class="f_fs14">', '', $results); 
$results = str_replace("QUINELLA PLACE", '', $results); 
$results = str_replace(" ", '', $results); 
$results = str_replace("\t", '', $results); 
$results = str_ireplace("\x0D", "", $results); 
$results = str_replace("</td>", '', $results); 
$parts = explode("\n", $results);
$tce = [];
$qinAmount = [];
foreach($parts as $key => $part){
    if(strpos($part, "TIERCE")) $tce[] = str_replace(",", ", ", $parts[$key + 1]);
    if(strpos($part, "QUINELLA")) $qinAmount[] = str_replace(",", "", $parts[$key + 2]);
}
$tce = array_values($tce);  
$qinAmount = array_values($qinAmount);  
$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($contents as $raceNumber => $data){
    $favorites = $data['favorites'];
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . $favorites . "',\n"; 
    if(!isset($tce[$raceNumber - 1] )){
        var_dump($raceDate);
        var_dump($raceNumber);
        var_dump($tce); die();
    }
    $racetext .= "\t\t'official win' => '" . $tce[$raceNumber - 1] ."',\n"; 
    $racetext .= "\t\t'qin amount' => " . $qinAmount[$raceNumber - 1] .",\n"; 
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($betsFile, $outtext);

?>