<?php


class UserController extends Framework
{
    public function index()
    {
        echo "user controller";
    }

    public function userMethod(){

        $model = $this->model("User");

        if ($model->allUser()) {
             $data = $model->allUser();
             $this->view('user',$data);
        }else{
            echo 'User registration failed.';
        }

//        $data = [
//          'title' => "Demo title",
//          'description' => 'Demo description'
//        ];
//          $this->view('user',$data);
    }

}