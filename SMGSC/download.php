<?php
$namefile = "test.txt"; 

$file = fopen($namefile, "w") or die("Unable to open file!");
fwrite($file, $SC); 
fclose($file);
header("Content-Disposition: attachment; filename=\"" . $namefile . "\"");
header("Content-Type: application/force-download");
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header("Content-Type: text/plain");
echo $SC ;
exit();
?>
