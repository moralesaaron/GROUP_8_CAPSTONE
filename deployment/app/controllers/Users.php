<?php

class Users extends Controller
{
  public function index()
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $rows = $x->findAll();

    $this->view('users/index', [
      'users' => $rows
    ]);
  }

  public function create()
  {
    if (!Authadmin::logged_in()) {
      // redirect('login');
    }

    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        if (count($_FILES) > 0) {

          $allowed[] = 'image/png';
          $allowed[] = 'image/jpeg';

          if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

            $folder = 'assets/images/';

            if (!file_exists($folder)) {
              mkdir($folder, 0777, true);
            }

            $destination = $folder . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
          }
        }

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['token'] = random_string(60);

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
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

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
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('users');
    }

    $this->view('users/delete', [
      'user' => $row
    ]);
  }

  public function register_user()
{
  $errors = [];
  $user = new User();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['role'] = 'user'; // Force role

    if ($user->validate($_POST)) {

      // Optional image upload
      if (!empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = ['image/png', 'image/jpeg'];
        if (in_array($_FILES['image']['type'], $allowed)) {
          $folder = 'assets/images/';
          if (!file_exists($folder)) mkdir($folder, 0777, true);

          $destination = $folder . $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], $destination);
          $_POST['image'] = $destination;
        }
      }

      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $_POST['token'] = random_string(60);

      $user->insert($_POST);
      redirect('login');
    } else {
      $errors = $user->errors;
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

    if ($user->validate($_POST)) {

      if (!empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = ['image/png', 'image/jpeg'];
        if (in_array($_FILES['image']['type'], $allowed)) {
          $folder = 'assets/images/';
          if (!file_exists($folder)) mkdir($folder, 0777, true);

          $destination = $folder . $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], $destination);
          $_POST['image'] = $destination;
        }
      }

      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $_POST['token'] = random_string(60);

      $user->insert($_POST);
      redirect('login');
    } else {
      $errors = $user->errors;
    }
  }

  $this->view('register_dorm', ['errors' => $errors]);
}


}




