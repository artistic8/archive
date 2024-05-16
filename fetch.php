<?php
/**
 * Given a race date, find all changes in file $raceDate/odds.php in the commits made between the day of the race
 * and the previous day
 */
if(!isset($argv[1])) die("Race Date Not Entered!!\n");
$raceDate = trim($argv[1]);

if(isset($argv[2])) $year = $argv[2];
else $year = 2024;

exec("git checkout https://github.com/artistic3/20240101",$output);
var_dump($output); die();

?>