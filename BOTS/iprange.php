<?php

### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
$range_start = ip2long("146.112.0.0");
$range_end   = ip2long("146.112.255.255");
$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

if ($ip2long >= $range_start && $ip2long <= $range_end){
	$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blacklist ] \r\n";
	$save=fopen("../bots.txt","a+");
	fwrite($save,$content);
	fclose($save);
	header("HTTP/1.0 404 Not Found");exit();
}


?>