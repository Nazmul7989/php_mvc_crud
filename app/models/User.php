<?php


class User extends Database
{

    //check whether email already exists or not
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

    //register new user
    public function userRegister($data)
    {

        $insertSql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (?,?,?)";

        if ($this->runQuery($insertSql,$data)) {
            return true;
        }else{
            return false;
        }

    }

    public function userLogin($email,$password)
    {
        $selectSql = "SELECT * FROM `users` WHERE `email`='$email' ";

        if ($this->runQuery($selectSql)) {
            if ($this->rowCount() > 0) {
                $row = $this->selectOne();
                $dbPassword = $row->password;
                if (password_verify($password,$dbPassword)) {
                    return true;
                }
            }else{
                return false;
            }
        }
    }

}