<?php

class Users extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['USER']) || $_SESSION['USER']->role !== 'admin') {
    redirect('login');
  }

  $user = new User();

  // Only fetch users with role 'user'
  $data['users'] = $user->where(['role' => 'user']);

  $this->view('users/index', $data); 
  }

  public function create()
  {
    require_admin();


    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['token'] = bin2hex(random_bytes(32));

        $user->insert($_POST);

        redirect('users');
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('users/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    require_admin();

    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'user' => $row
    ]);
  }

  public function delete($id)
{
  require_admin();

  $userModel = new User();
  $user = $userModel->first(['id' => $id]);

  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel->delete($id);
    redirect('users');
  }

  $this->view('users/delete', [
    'user' => $user
  ]);
}


  public function register_user()
{
  $errors = [];
  $user = new User();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['role'] = 'user';
    $_POST['token'] = random_string(60);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Image Upload
    if (!empty($_FILES['image']['name'])) {
      $allowed = ['image/jpeg', 'image/png', 'image/jpg'];
      if ($_FILES['image']['error'] === 0 && in_array($_FILES['image']['type'], $allowed)) {
        $folder = 'assets/images/';
        if (!file_exists($folder)) mkdir($folder, 0777, true);

        $filename = time() . '_' . $_FILES['image']['name'];
        $destination = $folder . $filename;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
          $_POST['image'] = $destination;
        } else {
          $errors[] = "Image upload failed. Please try again.";
        }
      } else {
        $errors[] = "Invalid image file type.";
      }
    }

    // Validation and Insertion
    if (empty($errors) && $user->validate($_POST)) {
      $user->insert($_POST);
      redirect('login');
    } else {
      $errors = array_merge($errors, $user->errors);
    }
  }

  $this->view('register_user', ['errors' => $errors]);
}




public function register_dorm()
{
  $errors = [];
  $user = new User();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['role'] = 'dorm';
    $_POST['token'] = random_string(60);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Image Upload
    if (!empty($_FILES['image']['name'])) {
      $allowed = ['image/jpeg', 'image/png', 'image/jpg'];
      if ($_FILES['image']['error'] === 0 && in_array($_FILES['image']['type'], $allowed)) {
        $folder = 'assets/images/';
        if (!file_exists($folder)) mkdir($folder, 0777, true);

        $filename = time() . '_' . $_FILES['image']['name'];
        $destination = $folder . $filename;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
          $_POST['image'] = $destination;
        } else {
          $errors[] = "Image upload failed. Please try again.";
        }
      } else {
        $errors[] = "Invalid image file type.";
      }
    }

    // Validation and Insertion
    if (empty($errors) && $user->validate($_POST)) {
      $user->insert($_POST);
      redirect('login');
    } else {
      $errors = array_merge($errors, $user->errors);
    }
  }

  $this->view('register_dorm', ['errors' => $errors]);
}


}




