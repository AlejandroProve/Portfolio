<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tucorreo@gmail.com';      // tu Gmail
    $mail->Password = 'tu_app_password';        // App Password generado
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('tucorreo@gmail.com', 'Héctor Alejandro'); 

    $mail->isHTML(false);
    $mail->Subject = 'Nuevo mensaje desde tu portafolio';
    $mail->Body    = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";

    $mail->send();
    header("Location: index.php?success=1");
    exit;
} catch (Exception $e) {
    header("Location: index.php?success=0");
    exit;
}
?>
