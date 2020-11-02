<?php
    $a= $_GET['state'];
    $file= fopen("abc","a");
    fwrite($file, $a);
    date_default_timezone_set("Asia/kolkata");
    fwrite($file, "-Date: ".date("d/m/y")."\tTime-".date("h:i:sa")."\n");
    fclose($file);
?>
    