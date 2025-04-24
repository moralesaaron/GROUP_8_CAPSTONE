<?php

class Verify extends Controller
{
  public function index()
  {
    $email = $_GET['email'] ?? '';
    $token = $_GET['token'] ?? '';

    $user = new User();
    $row = $user->first(['email' => $email, 'token' => $token]);

    if ($row) {
      // Token matched: update user to verified
      $user->update($row->id, [
        'is_verified' => 1,
        'token' => null
      ]);

      echo "✅ Your email has been verified. You can now log in.";
    } else {
      echo "❌ Invalid or expired verification link.";
    }
  }
}
