<?php

class Login extends Controller
{
  public function index()
  {
    // 🚫 Block access to login if already logged in
    if (Auth::logged_in()) {
      $role = $_SESSION['USER']->role;

      switch ($role) {
        case 'admin':
          redirect('admin/dashboard');
          break;
        case 'dorm':
          redirect('dorm/dashboard');
          break;
        case 'user':
          redirect('explore');
          break;
        default:
          Auth::logout(); // just in case
          redirect('login');
      }
    }

    $errors = [];
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = trim($_POST['email'] ?? '');
      $password = $_POST['password'] ?? '';

      // Check for resending email verification
      if (isset($_POST['resend_verification'])) {
        // Handle the resend of the verification email
        $row = $user->first(['email' => $email]);

        if ($row && !$row->is_verified) {
          $token = bin2hex(random_bytes(16));
          $user->update($row->id, ['token' => $token]);

          $mail = new PHPMailer\PHPMailer\PHPMailer(true);

          try {
            // SMTP settings here
            $mail->addAddress($email);
            $mail->Subject = 'Verify your email address';
            $mail->Body = 'Click here to verify: ' . ROOT . '/verify?email=' . urlencode($email) . '&token=' . $token;

            if ($mail->send()) {
              Flash::set('success', 'Verification email sent! Please check your inbox.');
            } else {
              Flash::set('error', 'Failed to send verification email.');
            }
          } catch (Exception $e) {
            Flash::set('error', 'Failed to send email. Please try again.');
          }
        } else {
          Flash::set('error', 'Email not found or already verified.');
        }
        redirect('login'); // After resend attempt, redirect back to the login page
      }

      // Proceed with normal login process
      if (!empty($email) && !empty($password)) {
        $row = $user->first(['email' => $email]);

        if ($row && password_verify($password, $row->password)) {

          // ✋ Check if the account is verified
          if (!$row->is_verified) {
            $errors[] = 'Please verify your email first.';
          } else {
            // ✅ Account is verified: Log in
            Auth::authenticate($row);

            // 🔁 Redirect based on role
            switch ($row->role) {
              case 'admin':
                redirect('admin/dashboard');
                break;
              case 'dorm':
                redirect('DormDashboard/index');
                break;
              case 'user':
                redirect('explore');
                break;
              default:
                $errors[] = 'Unrecognized role. Contact support.';
                Auth::logout();
            }
          }

        } else {
          $errors[] = 'Email or Password is invalid.';
        }
      } else {
        $errors[] = 'Please fill in all fields.';
      }
    }

    $this->view('login', ['errors' => $errors]);
  }
}
