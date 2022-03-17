<?php


class UserController extends Framework
{

    public function userMethod(){
        $data = [
          'title' => "Demo title",
          'description' => 'Demo description'
        ];
          $this->view('user',$data);
    }

}