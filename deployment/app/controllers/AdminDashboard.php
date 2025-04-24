<?php

class AdminDashboard extends Controller
{
  public function index()
  {
    if (!Auth::logged_in() || $_SESSION['USER']->role !== 'admin') {
      redirect('login');
    }

    $this->view('admin/dashboard');
  }
}
