<?php

class Dormdash extends Controller
{
  public function index()
  {
    //if (!Auth::logged_in()) {
    //  redirect('login');
    //}

    $this->view('dormdash');
  }
}