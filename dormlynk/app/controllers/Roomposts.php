<?php

class Roomposts extends Controller
{
  public function index()
  {
    // if (!Auth::logged_in()) {
    //   redirect('login');
    // }

    $x = new Roompost();
    $rows = $x->findAll();

    $this->view('roomposts/index', [
      'roomposts' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $roompost = new Roompost();

    if (count($_POST) > 0) {

      // if ($coma>validate($_POST)) {

      //   // if (count($_FILES) > 0) {

      //   //   $allowed[] = 'image/png';
      //   //   $allowed[] = 'image/jpeg';

      //   //   if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

      //   //     $folder = 'assets/images/';

      //   //     if (!file_exists($folder)) {
      //   //       mkdir($folder, 0777, true);
      //   //     }

      //   //     $destination = $folder . $_FILES['image']['name'];
      //   //     move_uploaded_file($_FILES['image']['tmp_name'], $destination);
      //   //     $_POST['image'] = $destination;
      //   //   }
      //   // }

      //   // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      //   // $_POST['token'] = random_string(60);

      //   $coma->insert($_POST);

      //   redirect('comas');

      // } else {
      //   $errors = $coma->errors;
      // }

      $_POST['token'] = random_string(60);
      $roompost->insert($_POST);

      redirect('roomposts');

    }

    $this->view('roomposts/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Roompost();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('roomposts');
    }

    $this->view('roomposts/edit', [
      'roomposts' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Coma();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('roomposts');
    }

    $this->view('roomposts/delete', [
      'coma' => $row
    ]);
  }
}