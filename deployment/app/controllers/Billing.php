<?php

class Billing extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['USER'])) {
            redirect('login');
        }

        $user = new User();
        $data['user'] = $user->getUserById($_SESSION['USER']->id);

        $this->view('users/billing.view', $data);
    }
}
