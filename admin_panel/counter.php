<?php
    $page_name = basename($_SERVER['PHP_SELF']);
    $page_name = strtok($page_name,'.');
    $file_name = '../counter.txt';

    $file = fopen($file_name,'r');
    if($file == false){
        $file = fopen($file,'w');
        $count = 0;
    } else{
        $count = fread($file,filesize($file_name));
    }
    fclose($file);

    $count++;
    echo $count;

    $file = fopen($file_name,'w');

    fwrite($file,$count);
    
    fclose($file);
?>