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


sendMessage("1245");

// создание нового ресурса cURL

$ch = curl_init();

// установка URL и других необходимых параметров

curl_setopt($ch, CURLOPT_URL, "$url");

//а это что бы на страницу не выводилось

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//это в справочнике прочтете
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

// загрузка страницы и выдача её браузеру другими словами при открытии страницы где вы этот скрипт сделаете автоматически отправится сообщение в заданный вами телеграм чат.

curl_exec($ch);

// завершение сеанса и освобождение ресурсов

curl_close($ch);
?>