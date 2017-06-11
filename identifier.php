<?php
 
//Device Identifier & IP Grabber
 
//Variables
header ('Location: http://i.imgur.com/Jj9tdnm.jpg'); 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$date = new DateTime('NOW')->format("y:m:d h:i:s");
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

 
//Print IP, Hostname, Port Number, User Agent, Date/Time and Referer To data.txt
 
$fh = fopen('data.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'User Agent: '."".$date ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);
?>