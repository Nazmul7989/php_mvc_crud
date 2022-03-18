<?php


class UserController extends Framework
{

    public function __construct()
    {
        $this->helper('link');
        $this->userModel = $this->model("User");
    }

    public function index()
    {
        $this->view('welcome');
    }

    public function login()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }


    public function userRegister()
    {
        $userData = [
            'name'          =>  $this->input('name'),
            'email'         =>  $this->input('email'),
            'password'      =>  $this->input('password'),
            'nameError'     => '',
            'emailError'    => '',
            'passwordError' => ''
        ];

        if (empty($userData['name'])) {
            $userData['nameError'] = 'User Name Required!';
        }

        if (empty($userData['email'])) {
            $userData['emailError'] = 'Email Required!';
        }else{
            if (!$this->userModel->checkEmail($userData['email'])) {
                $userData['emailError'] = 'This email already exists';
            }
        }

        if (empty($userData['password'])) {
            $userData['passwordError'] = 'Password Required!';
        }elseif (strlen($userData['password']) < 6){
            $userData['passwordError'] = 'Password must be at least 6 characters!';
        }

        if (empty($userData['nameError']) && empty($userData['emailError']) && empty($userData['passwordError'])) {

            $password = password_hash($userData['password'],PASSWORD_DEFAULT);
            $data = [$userData['name'],$userData['email'],$password];


            if ($this->userModel->userRegister($data)) {
                $this->setFlash('accountCreated','Your account created successfully.');
                $this->setSession('email',$userData['email']);
                $this->redirect('UserController/login');
            }else {
                echo "User registration failed.";
            }
        }else{
            $this->view('register',$userData);
        }

    }

    public function userLogin()
    {
        $userData = [
            'email'         =>  $this->input('email'),
            'password'      =>  $this->input('password'),
            'emailError'    => '',
            'passwordError' => ''
        ];


        if (empty($userData['email'])) {
            $userData['emailError'] = 'Email Required!';
        }

        if (empty($userData['password'])) {
            $userData['passwordError'] = 'Password Required!';
        }

        if (empty($userData['emailError']) && empty($userData['passwordError'])) {
            echo 'login successfully';
        }else{
            $this->view('login',$userData);
        }


    }

}