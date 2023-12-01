<?php
/*
Template Name: Kalender
*/
?>
<?php get_header() ?>


<head>
    <style>
        .kalender-main-content {
            text-align: center;
            max-width: 800px;
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
            flex: 0 0 45%;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<div class="kalender-main-content">
    <h1 class="headline">Kalender</h1>
    <p class="text"> Kalender med dit logo og layout eller spiral kalender med dine billeder. <br> Farve printes med 6
        måneder på
        hver side. </p>

    <div class="box-container">
        <div class="row">
            <div class="box">
                <h4 class="headline">A5 Bordkalender</h4>
                <p> Bordkalender med farve print </p>
                <p>1 stk for 16kr</p>
                <p>10 stk for 123kr</p>
                <p>25 stk for 291kr</p>
                <p>50 stk for 472kr </p>
                <p>100 stk for 788kr</p>
            </div>

            <div class="box">
                <h4 class="headline">A4 Kalender</h4>
                <p>281x48 mm. felt til logo, info og reklame.</p>
                <p>1 stk for 22kr</p>
                <p>10 stk for 116kr</p>
                <p>25 stk for 285kr</p>
                <p>50 stk for 516kr </p>
                <p>100 stk for 844kr</p>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <h3 class="headline">Spiral Kalender</h3>
                <p>Spiral kalender med 1 eller 2 fotos
                    pr. måned.</p>
                <p>A4 str for 76kr</p>
                <p>A3 str for 135kr</p>
            </div>
        </div>
        <div class="text-container">
            <p class="text">Priser er inklusiv moms. Eksl. print og fragt. <br> Lever venligst en PDF fil til print.
            </p>
        </div>
    </div>

    <?php get_footer(); ?>