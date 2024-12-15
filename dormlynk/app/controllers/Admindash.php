<?php

class Admindash extends Controller
{
  public function index()
  {
    if (!Authadmin::logged_in()) {
     redirect('adminlog');
    }

    $this->view('admindash');
  }
}