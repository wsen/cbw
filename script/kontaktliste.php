<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

$inputZeile = '"'.$_POST['nachname'].'";"'.$_POST['vorname'].'";"'.$_POST['email'].'";"'.$_POST['mobil'].'"'."\n";

$exportFile = 'klassenliste_hcj1.csv';

if(file_exists($exportFile)) {
	$datei = fopen($exportFile,"a") or die("Export-Datei kann nicht gefunden werden");
} 
else {
	$datei = fopen($exportFile,"w") or die("Export-Datei kann nicht gefunden werden");
}
    
fwrite($datei, $inputZeile,100000);
fwrite($datei, mb_convert_encoding($inputZeile, 'UTF-16LE', 'UTF-8'));
fclose($datei);

echo '<h3>Klassenliste</h3>';
echo '<h2>Folgende Daten wurden gespeichert</h2>';

foreach($_POST as $key=>$value) {
	echo ucfirst($key) . ' : '. htmlentities($value) . '<br />';
}

echo '<br /><br /><a href="'.$exportFile.'">'.$exportFile.'</a>';
}
?>