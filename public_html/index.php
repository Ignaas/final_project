<?php

require '../bootloader.php';

use App\App;

$navigation = new \App\Views\Navigation();
$hero = new \App\Views\Hero();
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

<p>Work in progress</p>

<footer>
    <?php print $footer->render(); ?>
</footer>

</body>
</html>
