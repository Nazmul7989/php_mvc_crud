<?php


class Database
{

    public $host     = HOST;
    public $user     = USER;
    public $password = PASSWORD;
    public $dbname   = DBNAME;

    public $con;
    public $result;

    public function __construct()
    {
        try {

           return $this->con = new PDO("mysql:host=".$this->host. ";dbname=".$this->dbname, $this->user, $this->password);

        }catch (PDOException $exception){
            echo "Database connection error: ". $exception->getMessage();
        }
    }

    public function runQuery($qry, $params = [])
    {
        if (empty($params)) {
            $this->result = $this->con->prepare($qry);
            $statement =  $this->result->execute();
            return $statement;
        }else{
            $this->result = $this->con->prepare($qry);
            $statement =  $this->result->execute($params);
            return $statement;
        }
    }

    public function rowCount()
    {
        return $this->result->rowCount();
    }

    public function selectAll()
    {
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectOne()
    {
        return $this->result->fetch(PDO::FETCH_OBJ);
    }


}