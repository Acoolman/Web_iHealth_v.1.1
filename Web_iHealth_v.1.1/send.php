<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

if(mail("contact@staycalmapp.com", "Message from website", "Name:".$name.". E-mail: ".$email ,"From: ... \r\n"))
{ 
    echo "Message successfully sent"; 
} else { 
    echo "When sending a message, there were errors"; 
}?>
