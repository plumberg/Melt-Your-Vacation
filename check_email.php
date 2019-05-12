<?php
//from contact us POST form
$email= $_POST['email'];
$message=$_POST['message'];

//next checking for errors
$error='';
if(trim($email)==''){
    $error='Please enter your email';
}
elseif (strlen($message)<12) {
    $error='Message is too short';
}
if($error!=''){
    echo $error;
    exit;
}

//next, creating mail for to send to admin
$subject ="=?utf-8?B?".base64_encode("Message for admin")."?=";
$header = "From: $email\r\nReply-to: $email\r\nContent-type: text/html.charset=utf-8\r\n";

//This would work only on real server, not local server like Apache
mail('meltYourVacation@yandex.ru', $subject, $message, $header);

header('Location: email_was_sent.php');
 ?>
