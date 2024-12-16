<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'iweb.dev.mi04@gmail.com'; // Your Gmail address
        $mail->Password = 'lmdm wimv ilfm yima'; // Your Gmail password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'vaidic chetana site');
        $mail->addAddress('nayanbera9@gmail.com'); // Receiver's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send message. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
