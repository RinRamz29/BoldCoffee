
<?php

$userName = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "juanp162001@gmail.com";
$mail->Password = "zkO1QV0PC83rEFMj";

$mail->setFrom($email, $userName);
$mail->addAddress("juanp162001@gmail.com", "Juan");

$mail->Body = $mensaje;

$mail->send();