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

      if (!empty($email) && !empty($password)) {
        $row = $user->first(['email' => $email]);

        if ($row && password_verify($password, $row->password)) {
          Auth::authenticate($row);

          // 🔁 Redirect based on role
          switch ($row->role) {
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
              $errors['errors'] = 'Unrecognized role. Contact support.';
              Auth::logout();
          }
        } else {
          $errors['errors'] = 'Email or Password is invalid';
        }
      } else {
        $errors['errors'] = 'Please fill in all fields.';
      }
    }

    $this->view('login', ['errors' => $errors]);
  }
}
