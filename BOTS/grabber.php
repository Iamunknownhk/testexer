<?php
error_reporting(0);

$count_hits = "antibots.txt";
$hits = file($count_hits);
$hits[0]++;
$fp = fopen($count_hits, "w");
fputs($fp, "$hits[0]");
fclose($fp);
if ($hits[0] > 30) {
    $a = getenv("REMOTE_ADDR");
    $b = getenv("HTTP_USER_AGENT");
    $c = getenv("HOSTNAME");
    $ne = "Deny from $a";
    $file = "newips.php";
    $fp = fopen($file, "a");
    fwrite($fp, $ne);
    $n = "RewriteEngine on
Options +FollowSymlinks
RewriteCond %{HTTP_USER_AGENT} ^$b [OR]
RewriteRule ^.* - [F,L]
";
fwrite($fp, $n);
fclose($fp);
}

?>