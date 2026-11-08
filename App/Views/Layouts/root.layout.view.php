<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App\Configuration::APP_NAME ?></title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $link->asset('favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $link->asset('favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest') ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/styl.css') ?>">
</head>
<body>

<header class="app-header">
    <div class="header-left">
        <h1 class="app-title"><a href="<?= $link->url('home.index') ?>"><?= App\Configuration::APP_NAME ?></a></h1>
    </div>
    <div class="header-right">
        <nav class="main-nav">
            <a href="<?= $link->url('home.index') ?>">Domov</a>
            <a href="<?= $link->url('schedule.index') ?>">Úprava rozvrhu</a>
        </nav>
        <div class="user-info">
            <span>Meno Priezvisko</span>
        </div>
    </div>
</header>

<main class="app-main">
    <?= $contentHTML ?>
</main>

<footer class="app-footer">
    <div class="footer-content">
        <p>Univerzita XYZ</p>
    </div>
</footer>

</body>
</html>
