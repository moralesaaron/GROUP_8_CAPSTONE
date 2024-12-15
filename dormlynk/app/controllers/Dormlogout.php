<?php

class Dormlogout extends Controller
{
  public function index()
  {
    Authdorm::logout();
    redirect('home');
  }
}