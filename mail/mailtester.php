<?php

use xampp\htdocslaravel\mail\PHPMailer\src\PHPMailer;
use xampp\htdocslaravel\mail\PHPMailer\src\SMTP;
use xampp\htdocslaravel\mail\PHPMailer\src\Exception;

require '/xampp/htdocs/laravel/mail/PHPMailer/src/Exception.php';
require '/xampp/htdocs/laravel/mail/PHPMailer/src/PHPMailer.php';
require '/xampp/htdocs/laravel/mail/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@example.com';
    $mail->Password = 'your_email_password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('from@example.com', 'From Name');
    $mail->addAddress('to@example.com', 'To Name');
    $mail->isHTML(true);
    $mail->Subject = 'Test SMTP Connection';
    $mail->Body    = 'This is a test email to check the SMTP connection';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
