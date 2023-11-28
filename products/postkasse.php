<?php
/*
Template Name: Postkasse
*/
?>
<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add your own styles or link to an external stylesheet here -->
    <style>


        .container {
            max-width: 600px; /* Adjust the width as needed */
            margin: 0 auto;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .price {
            font-size: 18px;
            margin-bottom: 10px;
            color: white;
            text-align: center;
        }

        .image-box {
            margin-top: 20px;
            align-content: center;
            padding-left: 115px;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Bogstaver til Postkasse</h1>
        <p> Blokbogstaver skåret ud i enten hvid eller sort klæbefolie. Tekst er ca. en centimeter høj. Leveres med overførelses tape.
        Gode store bogstaver som postbuddet kan se. </p>

        <div class="price">
            
            <p>100,- for 1 linje.</p>
            <p>150,- for 2 linjer.</p>
            <p>200,- for 3 linjer.</p>
            <p>300,- for 4 linjer.</p>
        </div>

        <p>Priser er inklusiv moms. Eksklusiv fragt.</p>

        <div class="image-box">
            <img src="http://lumaprint.site/wp-content/uploads/2023/11/371485123_259162880492487_1336852508179692553_n.png" alt="Postkasse" width="300">
        </div>
    </div>

</body>
</html>


<?php get_footer(); ?>