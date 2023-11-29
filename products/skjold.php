<?php
/*
Template Name: Skjold
*/
?>

<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>

        .container {
            width: 50%;
            margin: auto;
            text-align: center;
            padding: 20px;
            color: white;
        }

        #text-info {
            margin-top: 20px;
            color: white;
        }

        #image-box {
            margin-top: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }
    </style>

</head>
<body>

    <div class="container">
        <header>
            <h1>Skjold til Æresport</h1>
        </header>

        <div id="image-box">
            <img src="http://test.local/wp-content/uploads/2023/11/Skjoldicon.jpg" alt="Your Image">
        </div>

        <div id="text-info">
            <p>40x40cm. skjold til æresport (hjertet måler 48x35cm)med din tekst og evt. billede printes på 5mm. <br>
            Tyk skumplade. 200,- uden fragt.
            270,- med fragt til erhervs adresse.
            370,- med fragt privat adresse. <br>
            Email din bestilling til luma@lumaprint.dk med ønsket tekst, form og evt. billede. Du får nogle forslag som skal godkendes inden print.<br>
            <a href=""> Se eksempler her </a> <br> Priser er inkl. moms.
            Eksl. fragt.</p>
        </div>

    </div>

</body>
</html>


<?php get_footer(); ?>