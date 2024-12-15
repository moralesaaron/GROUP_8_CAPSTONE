<?php

class Adms extends Controller
{
  public function index()
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Adm();
    $rows = $x->findAll();

    $this->view('adms/index', [
      'adms' => $rows
    ]);
  }

  public function create()
  {
    if (!Authadmin::logged_in()) {
      // redirect('login');
    }

    $errors = [];
    $adm = new Adm();

    if (count($_POST) > 0) {

      if ($adm->validate($_POST)) {

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

        $adm->insert($_POST);

        redirect('adms');
      } else {
        $errors = $adm->errors;
      }
    }

    $this->view('adms/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Adm();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('adms');
    }

    $this->view('adms/edit', [
      'adm' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Adm();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('adms');
    }

    $this->view('adms/delete', [
      'adm' => $row
    ]);
  }
}