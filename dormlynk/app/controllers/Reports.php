<?php

class Reports extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Report();
    $rows = $x->findAll();

    $this->view('reports/index', [
      'reports' => $rows
    ]);
  }

  public function create()
  {
    // if (!Auth::logged_in()) {
    //   redirect('login');
    // }

    $errors = [];
    $report = new Report();

    if (count($_POST) > 0) {

    //   if ($report>validate($_POST)) {

    //     if (count($_FILES) > 0) {

    //       $allowed[] = 'image/png';
    //       $allowed[] = 'image/jpeg';

    //       if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

    //         $folder = 'assets/images/';

    //         if (!file_exists($folder)) {
    //           mkdir($folder, 0777, true);
    //         }

    //         $destination = $folder . $_FILES['image']['name'];
    //         move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    //         $_POST['image'] = $destination;
    //       }
    //     }

    //     $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //     $_POST['token'] = random_string(60);

    //     $coma->insert($_POST);

    //     redirect('comas');

    //   } else {
    //     $errors = $report->errors;
    //   }
      
      $_POST['bpc_id'];
      $_POST['token'] = random_string(60);
      $_POST['token'] = random_string(60);
      $report->insert($_POST);

      redirect('home');

    }

    $this->view('reports/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Report();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('reports');
    }

    $this->view('reports/edit', [
      'reports' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Report();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('reports');
    }

    $this->view('reports/delete', [
      'report' => $row
    ]);
  }
}