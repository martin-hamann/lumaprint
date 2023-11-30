<?php
/*
Template Name: check
*/
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Check Page</title>
    <style>
        #image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .text-container {
            text-align: center;
            width: 50%;
            margin: 0 auto;
            
        }
        .check-kontakt-os-knap{
            margin-bottom:15vh;
        }
    </style>
</head>
<body>

    <h2 class="headline check-headline">Stor Check/Gavekort</h2>

    <div id="image-container">
        <img src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-billeder.jpg" alt="check/gavekort">
    </div>

    <div class="text-container text-center">
        <p class="text">Et 44x100 cm. farveprint klæbet på en 5 mm. tyk pur-skumplade. Farven kan efterligne dit logo eller som du ønsker. Mail os dit logo og info, så mailer vi en korrektur tilbage med et par layout forslag. Eller mail din egen design/layout som PDF fil til os.
        250,00 eksl. fragt. Afhentning hos Lumaprint Esbjerg.
        350,00 inkl. fragt til en dansk adresse.
        Priser er inkl. moms.

        Kan evt. bruges som gavekort.
        For andre størrelser, venligst mail efter en pris.</p>
        <!-- <p> Skabeloner: <a href="#">Powerpoint</a>
            <a href="#">Publisher</a>
            <a href="#">Eksempler</a></p> -->
    </div>
    <p class="text-center mt-3 text">Lyder det som noget for dig så kontakt os for et uforpligtende tilbud <br> Lever venligst en PDF fil til print. </p>
    <div class="container d-flex justify-content-center check-kontakt-os-knap"><button type="button" class="btn btn-lg px-4 me-md-2 hero-button-1 ">Kontakt Os</button> </div>
</body>
</html>

<?php get_footer(); ?>
