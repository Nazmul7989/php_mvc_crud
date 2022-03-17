<?php


class UserController extends Framework
{

    public function userMethod(){

        $model = $this->model("User");
        $model->allUser();
//        $data = [
//          'title' => "Demo title",
//          'description' => 'Demo description'
//        ];
//          $this->view('user',$data);
    }

}