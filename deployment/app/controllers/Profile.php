<?php

class Profile extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['USER'])) {
            redirect('login');
        }

        $user = new User();
        $data['user'] = $user->getUserById($_SESSION['USER']->id);

        $this->view('profile.view', $data);
    }
}
