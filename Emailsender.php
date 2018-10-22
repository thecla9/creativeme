<?php

$mailTo = $_POST['to']."\r\n";
$mailSubject = $_POST['subject']."\r\n";
$mailBody = $_POST['body']."\r\n";
$mailHeaders = "From: ".$_POST['from']."\r\n";
$mailHeaders .= "Reply-To: emailID@yourdomain.com \r\n";
$mailHeaders .= "Return-Path: emailID@yourdomain.com \r\n";
$mailHeaders .= "X-Mailer: PHP5 \r\n";
$mailHeaders .= 'MIME-Version: 1.0' . "\r\n";
$mailHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//Send Email Function
mail($mailTo,$mailSubject,$mailBody,$mailHeaders);


?>