<?php

class DormDashboard extends Controller
{
  public function index()
  {
    if (!Auth::logged_in() || $_SESSION['USER']->role !== 'dorm') {
      redirect('login');
    }

    $this->view('dormdashboard/dashboard');
  }
}
