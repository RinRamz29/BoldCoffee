<?php

$userName = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$phpmailer = new PHPMailer();

$phpmailer->isSMTP();
$phpmailer->Host = 'smtp-relay.sendinblue.com';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 587;
$phpmailer->Username = 'juanp162001@gmail.com';
$phpmailer->Password = 'zkO1QV0PC83rEFMj';
$phpmailer->SMTPSecure = 'tls';
    
$phpmailer->setFrom("juanp162001@gmail.com");
$phpmailer->addAddress($email);
    
$phpmailer->Subject = 'Hola';
$phpmailer->Body = $mensaje;


if ($phpmailer->send()){
    header("Location: contactoEnviado.php");
} else {
    header("Location: contactoNoEnviado.php");
}

