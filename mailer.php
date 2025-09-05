<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'designme.rajdeep@gmail.com';  // 🔁 your Gmail
    $mail->Password = 'lndclrhgsqxswyhu';     // 🔁 App password (not Gmail password)
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;

    // Sender & recipient
    $mail->setFrom('designme.rajdeep@gmail.com', 'Your Name');
    $mail->addAddress('designme.rajdeep@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Enquiry from GitHub';
    $mail->Body    = "
        <h3>Contact Form Submission</h3>
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Phone:</strong> {$_POST['phone']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Service:</strong> {$_POST['service']}</p>
        <p><strong>Message:</strong> {$_POST['message']}</p>
    ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
