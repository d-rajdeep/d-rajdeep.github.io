<?php
header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$response = ['status' => 'error', 'message' => 'Unknown error'];

try {
    // Basic validation (server-side)
    $name    = trim($_POST['name'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $service = trim($_POST['services'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name || !$phone || !$email || !$service || !$message) {
        throw new Exception('Please fill all required fields.');
    }
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        throw new Exception('Phone must be a 10-digit number.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address.');
    }

    $mail = new PHPMailer(true);
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'designme.rajdeep@gmail.com';
    $mail->Password = 'lndclrhgsqxswyhu'; // use app password / secure storage in production
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('designme.rajdeep@gmail.com', 'Website Contact');
    $mail->addAddress('designme.rajdeep@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Website Enquiry';
    $mail->Body    = "
        <h3>Contact Form Submission</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Service:</strong> {$service}</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->send();
    $response = ['status' => 'success', 'message' => 'Message sent successfully.'];
} catch (Exception $e) {
    error_log('Mailer error: ' . $e->getMessage()); // logs server-side
    // return the exception message (ok for debugging - remove on production)
    $response = ['status' => 'error', 'message' => $e->getMessage()];
}

echo json_encode($response);
