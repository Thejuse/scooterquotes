<?php 
    if(is_file('config/config.php')){
        require 'config/config.php';
    } else{
        echo ("Failed to include 'config.php'<br>Please check the wiki for informations!");
        die();
    }

    
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if($uriSegments[1] == "api"){
        if($uriSegments[2] == "json"){
            if(SQ_ENABLE_JSON_API == 1){
                require 'views/api/json_api.php';
            } else{
                header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
            }
        } else if($uriSegments[2] == "random"){
            if(SQ_ENABLE_RANDOM_API == 1){
                require 'views/api/random_api.php';
            } else{
                header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
            }
        } else {
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        }
    } else if ($uriSegments[1] == ""){
        require 'views/frontend/home.php';
    } else {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    }
?>