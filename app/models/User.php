<?php


class User extends Database
{

    public function checkEmail($email)
    {
        if ($this->runQuery("SELECT * FROM `users` WHERE `email`='$email'")) {
            if ($this->rowCount() > 0) {
                return false;
            }else{
                return true;
            }
        }
    }
    public function userRegister($data)
    {

        $insertSql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (?,?,?)";

        if ($this->runQuery($insertSql,$data)) {
            return true;
        }else{
            return false;
        }


    }

}