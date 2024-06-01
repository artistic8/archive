<?php

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


if(!isset($argv[1])) die("Race Date Not Entered!!\n");
$raceDate = trim($argv[1]);
$raceFolder = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
if(!is_dir($raceFolder)) exec("mkdir $raceFolder");
$betsFile = $raceFolder . DIRECTORY_SEPARATOR . "bets.php";
$contents = include($betsFile);
$raceDateFormat = substr($raceDate, 0, 4) . "/" . substr($raceDate, 4, 2) . "/" . substr($raceDate, 6, 2);
$html =  file_get_contents("https://racing.hkjc.com/racing/information/English/Racing/ResultsAll.aspx?RaceDate=$raceDateFormat");
$results = [];
$pos = strpos($html, '');
$html = "start\n" . get_string_between($html, '<div class="race_result">', '<div class="remark_botm_div');
if(strpos($html, '<div class="bg_green')){
    $html = get_string_between($html, 'start', '<div class="bg_green');
}
$parts = explode("\n", $html);
foreach($parts as $key => $line){
    if(strpos($line, 'bg_blue color_w f_fs13 font_wb"')){
        $var = str_replace('<div class="bg_blue color_w f_fs13 font_wb">', '', $line);
        $var = str_replace('</div>', '', $var);
        $var = str_replace('Race ', '', $var);
        $var = str_replace(' ', '', $var);
        $raceNumber = $var + 0;
        $results[$raceNumber] = [];
    }
    if(strpos($line, '<td class="fontXi" rowspan="1">WIN</td>')){
        $var = $parts[$key + 2];
        $var = str_replace('<td class="f_fs14 f_tar">', '', $var);
        $var = str_replace('</td>', '', $var);
        $var = str_replace(' ', '', $var);
        $var = str_replace(',', '', $var);
        if(!is_numeric($var)) {
            var_dump($raceDate); var_dump($raceNumber); var_dump($var);die();
        }
        $results[$raceNumber]['win'] = $var + 0;
    }
    if(strpos($line, '>PLACE</td>')){
        $places = [];
        $placer1 = $parts[$key + 1];
        $placer1 = str_replace('<td class="f_fs14">', '', $placer1);
        $placer1 = str_replace('</td>', '', $placer1);
        $placer1 = str_ireplace("\x0D", "", $placer1);
        $placer1 = str_replace(' ', '', $placer1);
        $placeAmount1 = $parts[$key + 2];
        $placeAmount1 = str_replace('<td class="f_fs14 f_tar">', '', $placeAmount1);
        $placeAmount1 = str_replace('</td>', '', $placeAmount1);
        $placeAmount1 = str_replace(' ', '', $placeAmount1);
        $places[$placer1] = (float)$placeAmount1;
        $placer2 = $parts[$key + 5];
        $placer2 = str_replace('<td class="f_fs14">', '', $placer2);
        $placer2 = str_replace('</td>', '', $placer2);
        $placer2 = str_ireplace("\x0D", "", $placer2);
        $placer2 = str_replace(' ', '', $placer2);
        $placeAmount2 = $parts[$key + 6];
        $placeAmount2 = str_replace('<td class="f_fs14 f_tar">', '', $placeAmount2);
        $placeAmount2 = str_replace('</td>', '', $placeAmount2);
        $placeAmount2 = str_replace(' ', '', $placeAmount2);
        $places[$placer2] = (float)$placeAmount2;
        if(strpos($parts[$key + 8], '<tr class="">')){
            $placer3 = $parts[$key + 9];
            $placer3 = str_replace('<td class="f_fs14">', '', $placer3);
            $placer3 = str_replace('</td>', '', $placer3);
            $placer3 = str_ireplace("\x0D", "", $placer3);
            $placer3 = str_replace(' ', '', $placer3);
            $placeAmount3 = $parts[$key + 10];
            $placeAmount3 = str_replace('<td class="f_fs14 f_tar">', '', $placeAmount3);
            $placeAmount3 = str_replace('</td>', '', $placeAmount3);
            $placeAmount3 = str_replace(' ', '', $placeAmount3);
            $places[$placer3] = (float)$placeAmount3;
        }
        $results[$raceNumber]['places'] = $places;
    }
    if(strpos($line, 'QUINELLA</td>')){
        $var = $parts[$key + 2];
        $var = str_replace('<td class="f_fs14 f_tar">', '', $var);
        $var = str_replace('</td>', '', $var);
        $var = str_replace(' ', '', $var);
        $var = str_replace(',', '', $var);
        $results[$raceNumber]['qin'] = $var + 0;
    }
    if(strpos($line, '>TRIO</td>')){
        $var = $parts[$key + 2];
        $var = str_replace('<td class="f_fs14 f_tar">', '', $var);
        $var = str_replace('</td>', '', $var);
        $var = str_replace(' ', '', $var);
        $var = str_replace(',', '', $var);
        $results[$raceNumber]['trio'] = $var + 0;
    }
    if(strpos($line, 'QUARTET</td>')){
        $var = $parts[$key + 1];
        $var = str_replace('<td class="f_fs14">', '', $var);
        $var = str_replace('</td>', '', $var);
        $var = str_ireplace("\x0D", "", $var);
        $var = str_replace(' ', '', $var);
        $var = str_replace(',', ', ', $var);
        $results[$raceNumber]['quartet'] = $var;
    }
    elseif(strpos($line, 'TIERCE</td>')){
        $var = $parts[$key + 1];
        $var = str_replace('<td class="f_fs14">', '', $var);
        $var = str_replace('</td>', '', $var);
        $var = str_ireplace("\x0D", "", $var);
        $var = str_replace(' ', '', $var);
        $var = str_replace(',', ', ', $var);
        $results[$raceNumber]['quartet'] = $var;
    }
}
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
    $racetext .= "\t\t'official win' => '" . $results[$raceNumber]['quartet'] ."',\n"; 
    $racetext .= "\t\t'win amount' => " . $results[$raceNumber]['win'] .",\n"; 
    $racetext .= "\t\t'qin amount' => " . $results[$raceNumber]['qin'] .",\n"; 
    $racetext .= "\t\t'trio amount' => " . $results[$raceNumber]['trio'] .",\n"; 
    $racetext .= "\t\t'place amount' => [\n";
    $places = $results[$raceNumber]['places'];
    foreach($places as $place => $amount){
        $racetext .= "\t\t\t$place => $amount,\n";
    }
    $racetext .= "\t\t],\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($betsFile, $outtext);

?>