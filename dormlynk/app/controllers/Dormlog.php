<?php

class Dormlog extends Controller
{
  public function index()
  {
    $errors = [];
    $user = new Dorm();

    if (count($_POST) > 0) {

      $arr['email'] = $_POST['email'];

      $row = $user->first($arr);

      if ($row) {

        if (password_verify($_POST['password'], $row->password)) {

          Authdorm::authenticate($row);

          redirect('dormdash');
        } else {
          $errors['errors'] = 'Email or Password is invalid';
        }
      } else {
        $errors['errors'] = 'Email or Password is invalid';
      }
    }


    $this->view('dormlog', [
      'errors' => $errors
    ]);
  }
}