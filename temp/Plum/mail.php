<?php

if ($_POST[':']!=''){
  die('No bots!');
}
else{
  $to = "lsa9art@gmail.com";
  $subject = "Отправка формы с сайта Plum";
  $redirect = "./ok.html";

foreach($_POST as $key => $value)
{ $fields .= $key.": ".$value." \r\n"; }
$message = $subject." \r\n".$fields; 
$headers  = "Content-type:  text/plain; charset=utf-8 \r\n"; 
mail($to, $subject, $message, $headers);
header('Location: '.$redirect);
}
?>
