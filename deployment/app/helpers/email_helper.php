<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php'; // Adjust path if needed

function sendVerificationEmail($recipientEmail, $token) {
  $mail = new PHPMailer(true);

  try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@dormlynk.com';
    $mail->Password = 'DormLynkTest123!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('noreply@dormlynk.com', 'DormLynk');


    if (empty($recipientEmail)) {
      error_log("Recipient email is empty.");
      return false;
  }
  
  if (!filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {
      error_log("Invalid email format: " . $recipientEmail);
      return false;
  }
  
  error_log("Adding recipient: " . $recipientEmail);
  



    $mail->addAddress($recipientEmail);

    $mail->isHTML(true);
    $mail->Subject = 'Verify Your Email Address';

    $verificationLink = ROOT . "/verify?email=" . urlencode($recipientEmail) . "&token=" . $token;
    $mail->Body = "Hello,<br><br>Please verify your email by clicking the link below:<br>
                   <a href='{$verificationLink}'>Verify Email</a><br><br>Thank you!";

    return $mail->send();
  } catch (Exception $e) {
    error_log("Mailer Error: " . $mail->ErrorInfo);
    return false;
  }
}


function sendCustomEmail($recipientEmail, $subject, $body) {
  $mail = new PHPMailer(true);

  try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@dormlynk.com';
    $mail->Password = 'DormLynkTest123!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('noreply@dormlynk.com', 'DormLynk');
    $mail->addAddress($recipientEmail);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    return $mail->send();
  } catch (Exception $e) {
    error_log("Mailer Error: " . $mail->ErrorInfo);
    return false;
  }
}
