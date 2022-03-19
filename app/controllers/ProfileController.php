<?php


class ProfileController extends Framework
{

    public function __construct()
    {
        if (!$this->getSession('email')) {
            $this->redirect('UserController/login');
        }
        $this->helper('link');
    }

    public function profile()
    {
        $this->view('profile');
    }

}