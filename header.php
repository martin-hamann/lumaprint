<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("encoding") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo("LUMAPRINT") ?>
    </title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b2340e7a76.js" crossorigin="anonymous"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg headline px-5 d-flex justify-content-between">
        <a class="navbar-brand" href="#"><span class="headline-color">LUMA</span>PRINT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Om Os</a>
                </li>
            </ul>
            <div class="button-container">
                <button class="contact-button btn btn-link ml-auto mr-0" type="button">Kontakt Os</button>
            </div>
        </div>
    </nav>
</header>

<body>