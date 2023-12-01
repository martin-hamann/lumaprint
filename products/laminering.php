<?php
/*
Template Name: Laminering
*/
?>

<?php get_header() ?>


<head>
    <style>
        .main-content {
            text-align: center;
            max-width: 800px;
            width: 100%;
            color: #ededed;
            margin: 5vh auto 5vh auto;
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

<div class="main-content">
    <h1 class="headline">Laminering</h1>
    <p>Laminering er to varme stykker plastfolie om et ark papir. Det beskytter mod vand og fugt. Kan rengøres. Det er
        dog ikke muligt at få arket ud af lamineringen igen. Vi kan laminere fra under A5 til A0. Max lamineringsbredde
        er 90 cm.</p>

    <div class="box-container">
        <div class="box">
            <h3>Alm. Glossy Laminat</h3>
            <p>A5/148x210mm for 7,50 kr.</p>
            <p>A4/210x297mm for 10,00 kr.</p>
            <p>A3/297x420mm for 20,00 kr.</p>
            <p>A2/420x594mm for 54,50 kr.</p>
            <p>A1/594x840mm for 67,50 kr.</p>
            <p>A0/840x119mm for 141,25 kr.</p>
        </div>

        <div class="box">
            <h3 class="headline">Mat Laminat</h3>
            <p>A5/148x210mm for 10,00 kr.</p>
            <p>A4/210x297mm for 15,00 kr.</p>
            <p>A3/297x420mm for 30,00 kr.</p>
            <p>A2/420x594mm for 73,00 kr.</p>
            <p>A1/594x840mm for 110,00 kr.</p>
            <p>A0/840x119mm for 219,00 kr.</p>
        </div>

        <div class="box">
            <h3 class="headline">Glossy laminat med klæb</h3>
            <p>A5/148x210mm for 10,00 kr.</p>
            <p>A4/210x297mm for 15,00 kr.</p>
            <p>A3/297x420mm for 30,00 kr.</p>
            <p>A2/420x594mm for 143,00 kr.</p>
            <p>A1/594x840mm for 209,75 kr.</p>
            <p>A0/840x119mm for 403,75 kr.</p>
        </div>

        <div class="box">
            <h3 class="headline">Whiteboard laminat</h3>
            <p>A5/148x210mm for 35,00 kr.</p>
            <p>A4/210x297mm for 60,00 kr.</p>
            <p>A3/297x420mm for 101,00 kr.</p>
            <p>A2/420x594mm for 135,00 kr.</p>
            <p>A1/594x840mm for 215,00 kr.</p>
            <p>A0/840x119mm for 429,00 kr.</p>
        </div>
    </div>

    <p>Priser er inklusiv moms.
        Eksl. print og fragt.
        Ønsker du et tilbud på større oplæg?
        Eller en bestemt størrelse og mål?
        Så kontakt os endelig <br> Lever venligst en PDF fil til print.
    </p>

</div>

<?php get_footer(); ?>