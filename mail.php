<?php

ini_set('SMTP','192.2.1.237');
ini_set('smtp_port',25);
// tpapartments@swireproperties.com
$msg = '';
$msg .= "name : " . $_POST['name'] . "\r\n";
$msg .= "email : " . $_POST['email'] . "\r\n";
$msg .= "phone : " . $_POST['phone'] . "\r\n";
$msg .= "country : " . $_POST['country'] . "\r\n";
$msg .= "message : " . $_POST['message'] . "\r\n";



$headers = 'To: tpapartments@swireproperties.com' . "\r\n";
$headers .= 'From: '.$_POST['email']. "\r\n";



$to = "tpapartments@swireproperties.com";
$subject = "New email";

$res = new stdClass();

if (mail($to,$subject,$msg, $headers)) {
    $res->type = "success";
    $res->message = "Thank you for your message";

}else{
    $res->type = "error";
    $res->message = "Error emailing";
}

echo json_encode($res);