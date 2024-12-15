<?php

class Dorms extends Controller
{
  public function index()
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Dorm();
    $rows = $x->findAll();

    $this->view('dorms/index', [
      'dorms' => $rows
    ]);
  }

  public function create()
  {
    if (!Authdorm::logged_in()) {
      // redirect('login');
    }

    $errors = [];
    $dorm = new Dorm();

    if (count($_POST) > 0) {

      if ($dorm->validate($_POST)) {

        

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['token'] = random_string(60);

        $dorm->insert($_POST);

        if (!Authadmin::logged_in()) {
           redirect('dorms');
        }

        redirect('home');
      } else {
        $errors = $dorm->errors;
      }
    }

    $this->view('dorms/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Dorm();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('dorms');
    }

    $this->view('dorms/edit', [
      'dorm' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Authadmin::logged_in()) {
      redirect('login');
    }

    $x = new Dorm();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('dorms');
    }

    $this->view('dorms/delete', [
      'dorm' => $row
    ]);
  }
}