<?php


class User extends Database
{

    public function userRegister($name,$email,$password)
    {

        $insertSql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

        if ($this->runQuery($insertSql)) {
            return true;
        }else{
            return false;
        }



    }

}