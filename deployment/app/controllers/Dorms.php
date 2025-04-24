<?php
class Dorms extends Controller
{
  
  public function index()
  {
    
    if (!isset($_SESSION['USER']) || $_SESSION['USER']->role !== 'admin') {
        redirect('login');
      }
    
      $dormModel = new Dorm();
      $data['dorms'] = $dormModel->findAll(); // Get all dorms, not just by user ID

      $this->view('dorms/index', $data);
     }
  }