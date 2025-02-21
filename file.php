<?php
$var = fopen("ss.txt","r");
$strContent = fread($var,filesize("ss.txt"));
$count = substr_count($strContent,"\n");
echo $count + 1;
?>