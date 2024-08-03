<?php
require './vendor/autoload.php'; // Adjust path to vendor/autoload.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__.'/../'); // Adjust path to .env
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Load restricted values from environment variables
    $name_restriction = explode(',', $_ENV['RESTRICTED_NAMES']);
    $email_restriction = explode(',', $_ENV['RESTRICTED_EMAILS']);
    $message_restriction = explode(',', $_ENV['RESTRICTED_MESSAGES']);

    // Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || in_array($email, $email_restriction)) {
        echo "<script>alert('Whoopsie! 🐾 It seems there\'s a keyword restriction or the email address is playing hide-and-seek! 🕵️‍♂️ Please check the email address and try again ✨. Thanks a bunch!'); window.history.back();</script>";
        exit;
    }

    foreach ($name_restriction as $keyword) {
        if (stripos($fullname, $keyword) !== false) {
            echo "<script>alert('Whoopsie! 🐾 It seems your name contains restricted keywords.'); window.history.back();</script>";
            exit;
        }
    }

    foreach ($message_restriction as $keyword) {
        if (stripos($message, $keyword) !== false) {
            echo "<script>alert('Whoopsie! 🐾 It seems your message contains restricted keywords! 🕵️‍♂️ Please check and try again ✨'); window.history.back();</script>";
            exit;
        }
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $_ENV['SMTP_PORT'];

        // Recipients
        $mail->setFrom($_ENV['SMTP_USER'], 'Xodivorce Website');
        $mail->addAddress($_ENV['SMTP_SENDTO']);
        $mail->addReplyTo($email, $fullname);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Ta-da! You've got a mail, from the contact form on your website.<br><br>" .
                         "Full Name: " . $fullname . "<br>" .
                         "Email: " . $email . "<br>" .
                         "Message: <br>" . nl2br($message);

        $mail->send();
        echo "<script>alert('Success! Your message has taken off like a rocket! 🚀 We\'ll get back to you soon. Thanks for reaching out! ✨'); window.location.href = '../thankyou.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Whoopsie! 🐾 Our feedback feature seems to be chasing squirrels right now. Please reach out to us via email or try again later. 🌟 Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
