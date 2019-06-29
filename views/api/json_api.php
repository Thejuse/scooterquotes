<?php
    $quotesFile = file_get_contents('https://raw.githubusercontent.com/Thejuse/scooterquotes/quotes/scooter-quotes.json');
    $quotesArray = json_decode($quotesFile, true);

    $JSON = json_encode($quotesArray);

    echo $JSON;
?>
