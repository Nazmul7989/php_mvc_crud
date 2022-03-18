<?php


class UserController extends Framework
{

    public function __construct()
    {
        $this->helper('link');
    }

    public function index()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }
    public function userRegister()
    {
        $name     =  $this->input('name');
        $email    =  $this->input('email');
        $password =  $this->input('password');

        $model = $this->model('User');
        if ($model->userRegister($name,$email,$password)) {
            echo "User registered successfully";
        }else {
            echo "User registration failed.";
        }
    }

}