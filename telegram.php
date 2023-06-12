<?php

$data = $_POST['data'];
$times = $_POST['times'];
$number = $_POST['number'];
$add = $_POST['add'];

$token = "5802794766:AAGh7Mynb2eoO5_SRbB3K58iKcd8cYOwhLc";

$chat_id = "-955197974";

$arr = array(
  'Дата: ' => $data,
  'Час: ' => $times,
  'Телефон: ' => $number,
  'Що хоче:' => $add
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Дякуємо! Вашу заявку прийнято. Зв'яжемося з вами найближчим часом";
} else {
  echo "Error";
}
?>
