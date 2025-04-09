<?php

class Adminlog extends Controller
{
  public function index()
  {
    $errors = [];
    $adm = new Adm();

    if (count($_POST) > 0) {

      $arr['email'] = $_POST['email'];

      $row = $adm->first($arr);

      if ($row) {

        if (password_verify($_POST['password'], $row->password)) {

          Authadmin::authenticate($row);

          redirect('admindash');
        } else {
          $errors['errors'] = 'Email or Password is invalid';
        }
      } else {
        $errors['errors'] = 'Email or Password is invalid';
      }
    }


    $this->view('adminlog', [
      'errors' => $errors
    ]);
  }
}