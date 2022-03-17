<?php


class User extends Database
{

    public function allUser()
    {
        $name     = "Md Nazmul Hasan";
        $email    = "nazmul.ns7989@gmail.com";
        $password = "123456";
        $id = 33;

        $insertSql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

        $selectSql = "SELECT * FROM `users`";
        $selectOne = "SELECT * FROM `users` WHERE `id`='$id'";

        if ($this->runQuery($selectOne)) {
//           return $this->selectAll();
           return $this->selectOne();
        }else{
            return false;
        }



    }

}