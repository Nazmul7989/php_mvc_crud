<?php


class Framework
{

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

    public function model($modelName)
    {
        if (file_exists('../app/models/'.$modelName.'.php')) {
            require_once '../app/models/'.$modelName.'.php';
            return new $modelName();
        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! Model '.$modelName.'.php not Found.</div>';
        }
    }

    public function input($inputName)
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post") {
            return trim(strip_tags($_POST[$inputName]));
        }elseif ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
            return trim(strip_tags($_GET[$inputName]));
        }

    }

    public function helper($helperName)
    {
        if (file_exists('../system/helpers/'.$helperName.'.php')) {
            require_once '../system/helpers/'.$helperName.'.php';

        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! '.$helperName.'.php Helper file not Found.</div>';
        }
    }

}