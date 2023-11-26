<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("encoding") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo("LUMAPRINT") ?>
    </title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light headline d-flex justify-content-space-between">
        <a class="navbar-brand" href="#"><span class="headline-color">LUMA</span>PRINT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Om Os</a>
                </li>
            </ul>
            <button class="contact-button" type="button">Kontakt Os</button>
        </div>
    </nav>
</header>

<body>