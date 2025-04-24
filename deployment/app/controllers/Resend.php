<?php

require_once __DIR__ . '/../helpers/email_helper.php'; // 👈 Include the helper!

class Resend extends Controller
{
  public function index()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'] ?? '';

      if ($email) {
        $user = new User();
        $row = $user->first(['email' => $email]);

        if ($row) {
          $token = random_string(60); // longer + consistent with rest of app
          $user->update($row->id, ['token' => $token]);

          if (sendVerificationEmail($email, $token)) {
            Flash::set('success', '✅ Verification email sent! Please check your inbox.');
          } else {
            Flash::set('error', '❌ Failed to send email. Please try again.');
          }

          redirect('login');
        } else {
          Flash::set('error', '❌ Email not found.');
          redirect('login');
        }
      } else {
        Flash::set('error', '❌ Please enter your email.');
        redirect('login');
      }
    }
  }
}
