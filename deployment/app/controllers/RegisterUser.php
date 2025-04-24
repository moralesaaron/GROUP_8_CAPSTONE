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
        case 'dorm':
          redirect('dorm/dashboard');
        case 'user':
          redirect('explore');
        default:
          Auth::logout();
          redirect('login');
      }
    }

    $errors = [];
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Check if the email already exists
      $existingUser = $user->first(['email' => $_POST['email']]);

      if ($existingUser) {
        $errors[] = 'This email is already registered. Please use a different one.';
      }

      // Handle ID Image Upload
      if (!empty($_FILES['id_image']['name'])) {
        $allowed = ['image/jpeg', 'image/png', 'image/jpg'];
        if ($_FILES['id_image']['error'] === 0 && in_array($_FILES['id_image']['type'], $allowed)) {
          $folder = 'public/assets/images/';
          if (!file_exists($folder)) mkdir($folder, 0777, true);

          $filename = time() . '_' . $_FILES['id_image']['name'];
          $destination = $folder . $filename;

          if (move_uploaded_file($_FILES['id_image']['tmp_name'], $destination)) {
            $_POST['id_image'] = $filename;
          } else {
            $errors[] = "ID image upload failed. Please try again.";
          }
        } else {
          $errors[] = "Invalid ID image file type.";
        }
      } else {
        $errors[] = "Valid ID image is required.";
      }

      // Handle Profile Image Upload or Default
      if (!empty($_FILES['image']['name'])) {
        $allowed = ['image/jpeg', 'image/png', 'image/jpg'];
        if ($_FILES['image']['error'] === 0 && in_array($_FILES['image']['type'], $allowed)) {
          $folder = 'public/assets/images/';
          if (!file_exists($folder)) mkdir($folder, 0777, true);

          $filename = time() . '_' . $_FILES['image']['name'];
          $destination = $folder . $filename;

          if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
            $_POST['image'] = $filename;
          } else {
            $_POST['image'] = 'default.png'; // fallback to default
          }
        } else {
          $_POST['image'] = 'default.png'; // fallback to default
        }
      } else {
        $_POST['image'] = 'default.png';
      }

      if (empty($errors)) {
        $_POST['role'] = 'user';
        $_POST['token'] = random_string(60);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if ($user->validate($_POST)) {
          $user->insert($_POST);
          if (sendVerificationEmail($_POST['email'], $_POST['token'])) {
            Flash::set('success', 'Verification email sent! Please check your inbox.');
            redirect('login');
          } else {
            $errors[] = 'Failed to send verification email. Please try again.';
          }
        } else {
          $errors = array_merge($errors, $user->errors);
        }
      }
    }

    $this->view('registeruser', ['errors' => $errors]);
  }
}
