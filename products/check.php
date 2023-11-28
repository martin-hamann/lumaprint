<?php
/*
Template Name: check
*/
?>
<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Check Page</title>
    <style>

        body  {
            color: white;
        }

        #image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        #text {
            text-align: center;
            width: 50%;
            margin: 0 auto;
            
        }
    </style>
</head>
<body>

    <header style ="text-align: center; font-size: 24px;"> Stor Check/Gavekort</header>

    <div id="image-container">
        <img src="http://test.local/wp-content/uploads/2023/11/Mini-billeder.jpg" alt="check/gavekort">
    </div>

    <div id="text">
        <p>Et 44x100 cm. farveprint klæbet på en 5 mm. tyk pur-skumplade. Farven kan efterligne dit logo eller som du ønsker. Mail os dit logo og info, så mailer vi en korrektur tilbage med et par layout forslag. Eller mail din egen design/layout som PDF fil til os.
        250,00 eksl. fragt. Afhentning hos Lumaprint Esbjerg.
        350,00 inkl. fragt til en dansk adresse.
        Priser er inkl. moms.

        Kan evt. bruges som gavekort.
        For andre størrelser, venligst mail efter en pris.</p>
        <p> Skabeloner: <a href="#">Powerpoint</a>
            <a href="#">Publisher</a>
            <a href="#">Eksempler</a></p>
    </div>
    <p class="text-center mt-3">Lyder det som noget for dig så kontakt os for et uforpligtende tilbud </p>
    <div class="container d-flex justify-content-center"><button type="button" class="btn btn-lg px-4 me-md-2 hero-button-1 ">Kontakt Os</button> </div>
</body>
</html>

<?php get_footer(); ?>
