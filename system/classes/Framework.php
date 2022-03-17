<?php


class Framework
{

    public function view($fileName,$data = [])
    {
        if (file_exists('../app/views/'.$fileName.'.php')) {
            require_once '../app/views/'.$fileName.'.php';
        }else{
            echo '<div style="padding: 10px; color: red; font-size: 30px;">Sorry! '.$fileName.' file not Found.</div>';
        }

    }

}