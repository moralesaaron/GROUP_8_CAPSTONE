<?php

class Adminlogout extends Controller
{
  public function index()
  {
    Authadmin::logout();
    redirect('home');
  }
}