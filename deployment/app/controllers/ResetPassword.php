<?php

class ResetPassword extends Controller
{
  public function index()
  {
    $errors = [];
    $success = false;

    $email = $_GET['email'] ?? '';
    $token = $_GET['token'] ?? '';

    $user = new User();
    $row = $user->first(['email' => $email]);

    if (!$row || $row->reset_token !== $token) {
      $errors[] = "Invalid or expired reset link.";
      $this->view('resetpassword', ['errors' => $errors]);
      return;
    }

    // Handle password reset
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $password = $_POST['password'] ?? '';
      $password2 = $_POST['password2'] ?? '';

      if ($password !== $password2) {
        $errors[] = "Passwords do not match.";
      } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
      }

      if (empty($errors)) {
        $user->update($row->id, [
          'password' => password_hash($password, PASSWORD_DEFAULT),
          'reset_token' => null // clear the token
        ]);
        $success = true;
      }
    }

    $this->view('resetpassword', [
      'errors' => $errors,
      'success' => $success,
      'email' => $email,
      'token' => $token
    ]);
  }
}