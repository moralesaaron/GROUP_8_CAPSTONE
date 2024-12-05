<?php

class Dormify extends Controller
{
  public function index()
  {
    //if (!Auth::logged_in()) {
    //  redirect('login');
    //}

    $this->view('dormify');
  }
}