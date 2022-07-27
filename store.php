<?php
$myfile = fopen("location.txt", "w") or die("Unable to open file!");
$latv = $_GET["lat"]."\n";
fwrite($myfile, $latv);
$longv = $_GET["long"]."\n";
fwrite($myfile, $longv);
$ua = $_GET["agent"]."\n";
fwrite($myfile, $ua);
fclose($myfile);
?>