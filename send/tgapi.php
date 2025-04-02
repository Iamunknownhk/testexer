<?php 
$token = "6448436314:AAHrzLUc9MTSzyYyS4b2brH0KGOy7zE0p0I";  // set here your TOKEN value
$chatid = 1771543648; // set here your ID value

function message($msg) {        
	global $token,$chatid;        
	$url='https://api.telegram.org/bot'.$token.'/sendMessage';
	$data=array('chat_id'=>$chatid,'text'=>$msg);                                         
	$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);                                             
	$context=stream_context_create($options);        
	$result=file_get_contents($url,false,$context);        
	return $result;
} 
?>