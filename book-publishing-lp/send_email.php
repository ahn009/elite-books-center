<?php
// Include the Composer autoloader to load PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Instantiate PHPMailer
$mail = new PHPMailer(true);

try {
    // Set up SMTP server settings
    $mail->isSMTP();  // Use SMTP
    $mail->Host = 'smtp.hostinger.com';  // Hostinger SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@elitebookwriters.com';  // Your full Hostinger email address
    $mail->Password = 'Elitebook@321';  // Your Hostinger email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use STARTTLS for encryption
    $mail->Port = 587;  // Port for TLS encryption

    // Recipients
    $mail->setFrom('info@elitebookwriters.com', 'Mailer');  // From email
    $mail->addAddress('info@elitebookwriters.com');  // Recipient's email address

    // Email content
    $mail->isHTML(false);  // Plain text email
    $mail->Subject = 'New Form Submission from ' . htmlspecialchars($_POST['Name']);
    $mail->Body = "You have a new form submission:\n\n" .
                  "Name: " . htmlspecialchars($_POST['Name']) . "\n" .
                  "Phone: " . htmlspecialchars($_POST['Phone']) . "\n" .
                  "Email: " . htmlspecialchars($_POST['Email']) . "\n" .
                  "Message: " . htmlspecialchars($_POST['msg']) . "\n";

    // Send the email
    $mail->send();
    header("Location: thank-you.php");  // Redirect to thank-you page
    exit();
} catch (Exception $e) {
    // If the email could not be sent, show an error message
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
