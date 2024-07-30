<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                           // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';      // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = 'honeymehta277@gmail.com';// SMTP username
    $mail->Password   = 'eght wbqb mpdr qhpw';       // SMTP password
    $mail->SMTPSecure = 'tls';                 // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                   // TCP port to connect to

    //Recipients
    $mail->setFrom('your_email@gmail.com', 'Mailer');
    $mail->addAddress('honeymehta277@gmail.com', 'Honey Mehta'); // Add a recipient

    // Content
    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
