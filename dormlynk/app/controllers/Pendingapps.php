<?php

class Pendingapps extends Controller
{
  public function index()
  {
    if (!Authdorm::logged_in()) {
      redirect('dormlog');
    }

    $x = new Pendingapp();
    $rows = $x->findAll();

    $this->view('pendingapps/index', [
      'pendingapps' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $pendingapps = new Pendingapp();

    if (count($_POST) > 0) {

      if ($pendingapps->validate($_POST)) {

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

        $pendingapps->insert($_POST);

        redirect('browse');
      } else {
        $errors = $pendingapps->errors;
      }
    }

    $this->view('pendingapps/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Authdorm::logged_in()) {
      redirect('login');
    }

    $x = new Pendingapp();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('pendingapps');
    }

    $this->view('pendingapps/edit', [
      'pendingapps' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Authdorm::logged_in()) {
      redirect('login');
    }

    $x = new Pendingapp();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('pendingapps');
    }

    $this->view('pendingapps/delete', [
      'pendingapps' => $row
    ]);
  }
}