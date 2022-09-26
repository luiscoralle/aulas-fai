<?php

$row = $_GET['row'];
$col = $_GET['col'];
$aula = $_GET['aula'];

$csv = array_map('str_getcsv', file($aula.'.csv'));
//print_r($csv[$row][$col]);
print($csv[$row][$col]);


//shell_exec('/usr/bin/curl -L https://docs.google.com/spreadsheets/d/e/2PACX-1vTAmyVZR5eLPXgwVV8vSaIM6-hGjEoFNhOkSTjrkt116lt7x3kp99HVSB9sdKuQ_Kx0QY3F9B0Vp4L4/pub?output=csv > datos.csv');
//echo exec('cat datos.csv | grep 08:00 | cut -d"," -f2');
?>