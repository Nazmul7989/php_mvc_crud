<?php


class Student extends Database
{

    public function addStudent($data)
    {

        $insertSql = "INSERT INTO `students`(`name`, `email`, `phone`) VALUES (?,?,?)";

        if ($this->runQuery($insertSql,$data)) {
            return true;
        }else{
            return false;
        }

    }

    public function getAllStudents()
    {
        $selectSql = "SELECT * FROM `students`";

        if ($this->runQuery($selectSql)) {
            $students = $this->selectAll();
            return $students;
        }else{
            return false;
        }
    }

}