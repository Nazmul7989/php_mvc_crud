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

    public function getOneStudent($id)
    {
        $selectSql = "SELECT * FROM `students` WHERE `id`='$id'";

        if ($this->runQuery($selectSql)) {
            $students = $this->selectOne();
            return $students;
        }else{
            return false;
        }
    }

    public function updateStudent($data,$id)
    {
        $updateSql = "UPDATE `students` SET `name`=?,`phone`=?,`email`=? WHERE `id`='$id'";

        if ($this->runQuery($updateSql,$data)) {
            return true;
        }else{
            return false;
        }
    }

    public function deleteStudent($id)
    {
        $deleteSql = "DELETE FROM `students` WHERE `id`='$id'";

        if ($this->runQuery($deleteSql)) {
            return true;
        }else{
            return false;
        }
    }

}