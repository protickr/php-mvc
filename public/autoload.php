<?php
    spl_autoload_register(function ($name){

        $full_path = str_replace("\\", "/", __DIR__."/../{$name}.php");

        if(file_exists($full_path)){
            require_once $full_path;
        }else{
            echo "Could not load, file not found";
        }
    });
