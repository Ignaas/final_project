<?php

require '../bootloader.php';

use App\App;

$navigation = new \App\Views\Navigation();
$hero = new \App\Views\Hero();
$services = new \App\Views\Services();
$footer = new \App\Views\Footer();

if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>

<div>
    <?php print $hero->render(); ?>
</div>

<main>
    <?php print $services->render(); ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278381!2d25.33569661506837!3d54.72335198029061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1574932159096!5m2!1slt!2slt"
            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</main>

<footer>
    <?php print $footer->render(); ?>
</footer>

</body>
</html>
