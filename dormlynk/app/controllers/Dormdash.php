<?php

class Dormdash extends Controller
{
  public function index()
  {
    if (!Authdorm::logged_in()) {
     redirect('dormlog');
    }

    $this->view('dormdash');
  }
}