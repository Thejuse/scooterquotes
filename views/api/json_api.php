<?php 
    if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])){
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        die();
    }

    $quotesFile = file_get_contents('http://scooterquotes.loc/scooter-quotes.json');
    $quotesArray = json_decode($quotesFile, true);

    $JSON = json_encode($quotesArray);

    echo $JSON;
?>