<?php

error_reporting(0);

class Framework
{

    //load view file
    public function view($fileName,$data = [])
    {
//        if ($data == true) {
//            extract($data);
//        }
        if (file_exists('../app/views/'.$fileName.'.php')) {
            require_once '../app/views/'.$fileName.'.php';
        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! '.$fileName.' file not Found.</div>';
        }

    }

    //load model
    public function model($modelName)
    {
        if (file_exists('../app/models/'.$modelName.'.php')) {
            require_once '../app/models/'.$modelName.'.php';
            return new $modelName();
        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! Model '.$modelName.'.php not Found.</div>';
        }
    }

    //catch input value
    public function input($inputName)
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post") {
            return trim(strip_tags($_POST[$inputName]));
        }elseif ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
            return trim(strip_tags($_GET[$inputName]));
        }

    }

    //load css and js file
    public function helper($helperName)
    {
        if (file_exists('../system/helpers/'.$helperName.'.php')) {
            require_once '../system/helpers/'.$helperName.'.php';

        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! '.$helperName.'.php Helper file not Found.</div>';
        }
    }

    //set session data
    public function setSession($sessionName,$sessionValue)
    {
        if (!empty($sessionName) && !empty($sessionValue)) {
            $_SESSION[$sessionName] = $sessionValue;
        }
    }

    //get session data
    public function getSession($sessionName)
    {
        if (!empty($sessionName)) {
            return $_SESSION[$sessionName];
        }
    }

    //unset session data
    public function unsetSession($sessionName)
    {
        if (!empty($sessionName)) {
            unset($_SESSION[$sessionName]) ;
        }
    }

    //delete session data
    public function destroySession()
    {
        session_destroy();
    }

    //set flash message
    public function setFlash($sessionName,$msg)
    {
        if (!empty($sessionName) && !empty($msg)) {
            $_SESSION[$sessionName] = $msg;
        }
    }

    //get flash message
    public function flash($sessionName,$className)
    {
        if (!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName]) ) {
            $msg = $_SESSION[$sessionName];

            echo "<div class='". $className ."'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>".$msg."</div>";

            unset($_SESSION[$sessionName]);
        }
    }

    public function redirect($path)
    {
        if (!empty($path)) {
            header('location:'.BASEURL.'/'.$path);
        }
    }



}