<?php

require_once __DIR__ . '/../helpers/email_helper.php'; // Use your existing email helper

class ForgotPassword extends Controller
{
  public function index()
  {
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = trim($_POST['email'] ?? '');

      if (empty($email)) {
        $errors[] = 'Please enter your email.';
      } else {
        $user = new User();
        $row = $user->first(['email' => $email]);

        if ($row) {
          // Generate reset token
          $token = random_string(60);
          $user->update($row->id, ['reset_token' => $token]);

          // Send reset email
          $resetLink = ROOT . "/resetpassword?email=" . urlencode($email) . "&token=" . $token;

          if (sendCustomEmail($email, 'Reset Your Password', 
            "Hello,<br><br>Click the link below to reset your password:<br>
            <a href='{$resetLink}'>Reset Password</a><br><br>If you did not request this, ignore this email.")) {
            
            echo "✅ Reset link sent to your email.";
            die();
          } else {
            $errors[] = "Failed to send reset email. Please try again.";
          }
        } else {
          $errors[] = "Email not found.";
        }
      }
    }

    $this->view('forgotpassword', ['errors' => $errors]);
  }
}
