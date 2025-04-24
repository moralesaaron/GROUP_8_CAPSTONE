<?php

class Applications extends Controller
{
  public function owner()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $application = new Application();
    $applications = $application->getApplicationsForOwner(Auth::user()->id);

    $this->view('myapplications/applications', ['applications' => $applications]);
  }
}

