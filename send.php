<?php $to="rafaelpivaz@mail.ru"; // заменить на свою почту
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: ".$_SERVER['SERVER_NAME']." \r\n";
$subject="Message from rafaelpivaz ".$_SERVER['SERVER_NAME'];
$message="Test";
mail($to, $subject, $message, $headers); ?>