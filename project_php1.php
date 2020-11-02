<?php
$a= $_GET['state'];
$file=fopen("data","w");
fwrite($file,$a);
fclose($file);
header('Location: index.php');
?>