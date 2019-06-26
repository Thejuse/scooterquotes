<?php 
    if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])){
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        die();
    }

    $quotesFile = file_get_contents('https://raw.githubusercontent.com/Thejuse/scooterquotes/quotes/scooter-quotes.json');
    $quotesArray = json_decode($quotesFile, true);
    $quotesCount = count($quotesArray) - 1;

    $randomNumber = rand(0, $quotesCount);

    $quote = $quotesArray[$randomNumber]['quote'];
    $quoteTrack = $quotesArray[$randomNumber]['track'];
?>
<!DOCTYPE html>
<html lang="<?php echo SQ_LANGUAGE; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="<?php echo SQ_DESCRIPTION;?>">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#90BE6D">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#90BE6D">

    <meta property="og:title" content="scooter zitate - scooterQuotes">
    <meta property="og:url" content="<?php echo SQ_DOMAIN;?>">
    <meta property="og:description" content="<?php echo SQ_DESCRIPTION;?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SQ_DOMAIN;?>/images/scooter-image.jpg">

    <title>Scooter Zitate</title>
    <link rel="stylesheet" href="css/main.css">

    <?php if(SQ_SITE_PRIVATE == 1):?>
        <meta name="robots" content="noindex, nofollow" />
    <?php endif; ?>
</head>
<body>
    <div class="github-badge">
        <a href="https://github.com/Thejuse/scooterquotes/" title="Fork us on Github"><i class="fab fa-github"></i> Fork us on Github</a>
    </div>
    <main class="content">
        <div class="quotes">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="display-table">
                            <div class="display-table-cell left">
                                <h1 class="quote animated fadeInLeft"><?php echo $quote ?></h1>
                                <p class="track-title text-right animated fadeInRight"><?php echo $quoteTrack ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="help">
            <nav>
                <ul>
                    <li><a href="https://github.com/Thejuse/scooterquotes/" rel="noopener noreferrer" title="Github"><i class="fab fa-github"></i> Github</a></li>
                    <li><a href="<?php echo SQ_DOMAIN;?>/api/json/" target="_blank" rel="noopener noreferrer" title="JSON API">JSON API</a></li>
                    <li><a href="<?php echo SQ_DOMAIN;?>/api/random/" target="_blank" rel="noopener noreferrer" title="Random API">Random API</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="javascript/external/jquery/jquery.min.js"></script>
    <script src="javascript/app.js"></script>
</body>
</html>