<?php

class Browse extends Controller
{
  public function index()
  {
    //if (!Auth::logged_in()) {
    //  redirect('login');
    //}

    $this->view('browse');
  }
}