<?php
header('Access-Control-Allow-Origin: *');
sleep(2);
if($_SERVER['REQUEST_METHOD']=='POST') {
echo '<h3>Formularauswertung mit POST</h3>';
foreach($_POST as $key=>$value) {
echo $key . ' : '. $value . '<br />';
}
} else {
	echo '<h3>Formularauswertung mit GET</h3>';
	foreach($_GET as $key=>$value) {
	echo $key . ' : '. htmlentities($value) . '<br />';
}
}

if(isset($_FILES['profImg'])) {
   move_uploaded_file($_FILES['profImg']['tmp_name'], 'tmp/' . $_FILES['profImg']['name']);
	 
   echo 'Upload-Image:<br /><img src="tmp/'.$_FILES['profImg']['name'].'" alt="Upload-Image" style="max-width:150px;" />';  
}

echo '<br /><br /><a href="javascript: history.back();">zur&uuml;ck zum Formular</a>';
?>