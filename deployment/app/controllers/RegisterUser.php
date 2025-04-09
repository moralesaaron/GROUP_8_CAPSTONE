<?php

class RegisterUser extends Controller
{
  public function index()
  {
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
          Auth::logout();
          redirect('login');
      }
    }
    
    $errors = [];
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $_POST['role'] = 'user'; // Hardcode role
      $_POST['token'] = random_string(60);
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      if ($user->validate($_POST)) {
        $user->insert($_POST);
        redirect('login');
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('registeruser', ['errors' => $errors]);
  }
}
