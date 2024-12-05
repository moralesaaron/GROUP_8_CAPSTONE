<?php

class Room1 extends Controller
{
  public function index()
  {
    //if (!Auth::logged_in()) {
    //  redirect('login');
    //}

    $this->view('room1');
  }
}