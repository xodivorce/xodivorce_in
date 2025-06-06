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
        echo "<span><ion-icon name='mail-open-outline'></ion-icon>Yep, That's My Email! Use A Valid Email.</span>";
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
        $mail->Subject = 'New Contact Form Submission by ' . $fullname;
        $mail->Body =
            "Name: " . $fullname . "<br>" .
            "Email: " . $email . "<br>" .
            "Message: <br>" . nl2br($message)."<br><br>" .
            "<small style='color: #777;'>&copy; {$_ENV['WEB_INDEXY']} - " . date('y') . " {$_ENV['DOMAIN']}. All rights reserved.</small>";

        if ($mail->send()) {
            echo "<span><ion-icon name='checkmark-circle-outline'></ion-icon> Thanks! Your Message Sent Successfully. </span>";

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
                $autoReply->Subject = "We've Received Your Message!";
                $autoReply->Body =
                        "Dear <b>{$fullname}</b>,<br><br>" .
                        "Thank you for reaching out to <a href='{$_ENV['DOMAIN']}' target='_blank'>{$_ENV['DOMAIN']}</a>.<br>" .
                        "Your message has been received, and I’ll get back to you as soon as possible.<br><br>" .
                        "Warm regards,<br>" .
                        "<b>Prasid Mandal</b><br>" .
                        "<i>Founder, {$_ENV['DOMAIN']}</i><br><br>" .
                        "<small style='color: #777;'>&copy; {$_ENV['WEB_INDEXY']} - " . date('y') . " {$_ENV['DOMAIN']}. All rights reserved.</small>";

                $autoReply->send();
            } catch (Exception $e) {
                
            }
        } else {
            echo "<span><ion-icon name='close-circle-outline'></ion-icon> Error Sending Message! Please Try Again. </span>";
        }
    } catch (Exception $e) {
        echo "<span><ion-icon name='bug-outline'></ion-icon> A Mailer Error Occurred: <br><br> {$mail->ErrorInfo}</span>";
    }
}
?>