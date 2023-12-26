<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("encoding") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title() ?>
    </title>
    <?php wp_head() ?>
</head>


<body>
    <nav class="navbar navbar-expand-lg headline px-5 d-flex justify-content-between py-2">
        <a class="navbar-brand" href="http://lumaprint.site/"><span class="headline">LUMA</span>PRINT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://lumaprint.site/">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://lumaprint.site/produkter/">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://lumaprint.site/om-os/">Om Os</a>
                </li>
            </ul>
            <div class="button-container">
                <a href="http://lumaprint.site/kontakt-os/" class="kontakt-os-knap"><button
                        class="contact-button btn btn-link ml-auto mr-0" type="button">Kontakt Os</button></a>
            </div>
        </div>
    </nav>
   