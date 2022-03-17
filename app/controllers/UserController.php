<?php


class UserController extends Framework
{
    public function index()
    {
        $this->view('user');
    }

    public function register()
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