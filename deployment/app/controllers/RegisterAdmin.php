<?php

class RegisterAdmin extends Controller
{
  public function index()
  {
    $errors = [];
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $data = [
        'firstname' => trim($_POST['firstname']),
        'lastname'  => trim($_POST['lastname']),
        'email'     => trim($_POST['email']),
        'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'role'      => 'admin',
        'token'     => random_string(60),
      ];

      // Check if the email already exists
      $existingUser = $user->first(['email' => $data['email']]);

      if ($existingUser) {
        $errors[] = 'This email is already registered. Please use a different one.';
      }

      if (empty($errors)) {
        // Validate and insert if no errors
        if ($user->validate($data)) {
          $user->insert($data);
          redirect('login');
        } else {
          $errors = array_merge($errors, $user->errors);
        }
      }
    }

    $this->view('registeradmin', ['errors' => $errors]);
  }
}
