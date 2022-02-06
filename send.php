<?php
$chat_id = 548679581;
//$text = 'https://api.telegram.org/bot1425170162:AAH2rGYtNZciI-ylC39jYVWwWxowd9Pjx34/sendmessage?chat_id=548679581&text=HelloFromPhp';
$text = 'hello';
$token = '1425170162:AAH2rGYtNZciI-ylC39jYVWwWxowd9Pjx34';
$action = "/sendmessage?";
$url = 'https://api.telegram.org/bot'.$token.$action.'chat_id='.$chat_id.'&text='.$text;
// $info = file_get_contents($url);
// $info = json_decode($info, true);
// print_r($info);
//$fp = fopen($url, 'r');
function sendMessage($text)
{
    global $chat_id, $token, $action, $url;
$url = 'https://api.telegram.org/bot'.$token.$action.'chat_id='.$chat_id.'&text='.$text;
$info = file_get_contents($url);
$info = json_decode($info, true);
    print_r($info);
}


sendMessage("heroku");
?>