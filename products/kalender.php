<?php
/*
Template Name: Kalender
*/
?>
<?php get_header(); ?>


<head>
    <style>
        .box-container {
            display: flex;
            justify-content: center;
            margin:10vh auto;
        }

        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            box-sizing: border-box;
        }
        .text-box{
            border:none;
        }
    </style>
</head>

<div class="kalender-main-content col-md-12 text-center">
    <h1 class="headline">Kalender</h1>
    <p class="text"> Kalender med dit logo og layout eller spiral kalender med dine billeder. <br> Farve printes med 6
        måneder på
        hver side. </p>

    <div class="box-container d-flex flex-wrap col-md-12">
        <div class="row col-md-12">
            <div class="box col-md-4">
                <h4 class="headline">A5 Bordkalender</h4>
                <p class="text"> Bordkalender med farve print </p>
                <p class="text">1 stk for 16kr</p>
                <p class="text">10 stk for 123kr</p>
                <p class="text">25 stk for 291kr</p>
                <p class="text">50 stk for 472kr </p>
                <p class="text">100 stk for 788kr</p>
            </div>

            <div class="box col-md-4">
                <h4 class="headline">A4 Kalender</h4>
                <p class="text">281x48 mm. felt til logo, info og reklame.</p>
                <p class="text">1 stk for 22kr</p>
                <p class="text">10 stk for 116kr</p>
                <p class="text">25 stk for 285kr</p>
                <p class="text">50 stk for 516kr </p>
                <p class="text">100 stk for 844kr</p>
            </div>
        </div>

        <div class="row col-md-12 d-flex flex-wrap">
            <div class="box col-md-4">
                <h3 class="headline">Spiral Kalender</h3>
                <p class="text">Spiral kalender med 1 eller 2 fotos
                    pr. måned.</p>
                <p class="text">A4 str for 76kr</p>
                <p class="text">A3 str for 135kr</p>
            </div>
            <div class="text-container box text-box col-md-4">
                <p class="text">Priser er inklusiv moms. Eksl. print og fragt. <br> Lever venligst en PDF fil til print.
                </p>
            </div>
        </div>

    </div>

    <?php get_footer(); ?>