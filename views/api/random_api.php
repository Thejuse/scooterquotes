<?php
    $quotesFile = file_get_contents('https://raw.githubusercontent.com/Thejuse/scooterquotes/quotes/scooter-quotes.json');
    $quotesArray = json_decode($quotesFile, true);
    $quotesCount = count($quotesArray) - 1;

    $randomNumber = rand(0, $quotesCount);

    $myObj->quote = $quotesArray[$randomNumber]['quote'];
    $myObj->track = $quotesArray[$randomNumber]['track'];

    $JSON = json_encode($myObj);

    echo $JSON;
?>
