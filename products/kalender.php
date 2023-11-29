<?php
/*
Template Name: Kalender
*/
?>

<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
    <style>


        #main-content {
            text-align: center;
            max-width: 800px; /* Adjust max-width as needed */
            width: 100%;
            color: white;
            margin: 0 auto 0 auto;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .box {
            flex: 0 0 45%; /* Two boxes on one line, adjust width as needed */
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <div id="main-content" >
        <h1>Kalender</h1>
        <p> Kalender med dit logo og layout eller spiral kalender med dine billeder. <br> Farve printes med 6 måneder på hver side. </p>

        <div class="box-container">
            <div class="box">
                <h3>A5 Bordkalender</h3>
                <p> Bordkalender med farve print </p>
                <p>1 stk for 16kr</p>
                <p>10 stk for 123kr</p>
                <p>25 stk for 291kr</p>
                <p>50 stk for 472kr </p>
                <p>100 stk for 788kr</p>
            </div>

            <div class="box">
                <h3>A4 Kalender</h3>
                <p>281x48 mm. felt til logo, info og reklame.</p> 
                <p>1 stk for 22kr</p>
                <p>10 stk for 116kr</p>
                <p>25 stk for 285kr</p>
                <p>50 stk for 516kr </p>
                <p>100 stk for 844kr</p>
            </div>

            <div class="box">
                <h3>Spiral Kalender</h3>
                <p>Spiral kalender med <a href="#link-to-page-for-1">1</a> eller <a href="#link-to-page-for-2">2</a> fotos pr. måned.</p>
                <p>A4 str for 76kr</p>
                <p>A3 str for 135kr</p>
            </div>

            <p>Priser er inklusiv moms. Eksl. print og fragt. <br> Lever venligst en PDF fil til print.</p>
    </div>


    <?php get_footer(); ?>


</body>
</html>

