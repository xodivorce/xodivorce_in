<?php
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $filteredEmails = explode(',', $_ENV['FILTER_EMAILS']);
    if (in_array(strtolower($email), array_map('strtolower', $filteredEmails))) {
        echo "<span><ion-icon name='mail-open-outline'></ion-icon> Yep, that's my email! Use a valid email.</span>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span><ion-icon name='mail-open-outline'></ion-icon>Invalid email address! Please check and try again.</span>";
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = ($_ENV['SMTP_PORT'] == 465) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['SMTP_USER'], 'no-reply@xodivorce.in');
        $mail->addAddress($_ENV['SMTP_SENDTO']);
        $mail->addReplyTo($email, $fullname);

        $mail->isHTML(true);
        $mail->Subject = 'New contact form submission by ' . $fullname;
        $mail->Body =
            "Name: " . $fullname . "<br>" .
            "Email: " . $email . "<br>" .
            "Message: <br>" . nl2br($message)."<br><br>" .
            "Sincerely,<br>The Xodivorce Team<br>
            <p style='font-size:12px;color:#6E6E73;'>
            &copy; {$_ENV['WEB_INDEXY']} - " . date('Y') . " {$_ENV['DOMAIN']}. All rights reserved.
            </p>";
        if ($mail->send()) {
            echo "<span><ion-icon name='checkmark-circle-outline'></ion-icon> Thanks! Your message sent successfully. </span>";

            $autoReply = new PHPMailer(true);
            try {
                $autoReply->isSMTP();
                $autoReply->Host = $_ENV['SMTP_HOST'];
                $autoReply->SMTPAuth = true;
                $autoReply->Username = $_ENV['SMTP_USER'];
                $autoReply->Password = $_ENV['SMTP_PASS'];
                $autoReply->SMTPSecure = ($_ENV['SMTP_PORT'] == 465) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
                $autoReply->Port = $_ENV['SMTP_PORT'];

                $autoReply->setFrom($_ENV['SMTP_USER'], 'no-reply@xodivorce.in');
                $autoReply->addAddress($email, $fullname);

                $autoReply->isHTML(true);
                $autoReply->Subject = "We've received your message!";
                $firstName = explode(' ', trim($fullname))[0];

                $autoReply->Body = "
                    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                        <p>Dear <strong>{$firstName}</strong>,</p>
                        <p>
                            Thank you for reaching out on 
                            <a href='{$_ENV['DOMAIN']}' target='_blank'>{$_ENV['DOMAIN']}</a>.<br>
                            Your message has been received, and I will get back to you as soon as possible.
                        </p>
                        <p>Warm regards,</p>
                        <p>
                            <strong>Prasid Mandal</strong><br>
                            <em>Web Developer, {$_ENV['DOMAIN']}</em>
                        </p>
                        <p style='font-size:12px;color:#6E6E73;'>
                            &copy; {$_ENV['WEB_INDEXY']} - " . date('Y') . " {$_ENV['DOMAIN']}. All rights reserved.
                        </p>
                    </div>
                ";
                $autoReply->send();
            } catch (Exception $e) {
                
            }
        } else {
            echo "<span><ion-icon name='close-circle-outline'></ion-icon> Error sending message! Please try again. </span>";
        }
    } catch (Exception $e) {
        echo "<span><ion-icon name='bug-outline'></ion-icon> A mailer error occurred: <br><br> {$mail->ErrorInfo}</span>";
    }
}
?>