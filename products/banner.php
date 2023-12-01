<?php
/*
Template Name: Banner
*/

get_header();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

#main-content {
    display: flex;
    justify-content: center;
    align-items: flex-start; 
    min-height: 100vh; 
    padding-top: 20px; 
}

.content-box {
    max-width: 600px;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
}




    .klæbe-h1 {
        color: #e31e26;
        font-size: 5em; 
        text-align: center;
         margin-bottom: 20px;
    }

    .klæbe-h2 {
        color: #e31e26;
        justify-content: center;
        margin-bottom: 10px;


    }

    .klæbe-p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
        color:#ededed;
        margin-bottom: 15px;


    }

    .klæbe-ul {
        list-style-type: none;
        padding: 0;
        color:#ededed;

    }

    .klæbe-li {
        margin-bottom: 15px;
        border: 1px solid #dee2e6;
        padding: 10px;
        border-radius: 8px;
    }

    .klæbefolie-img {
        display: flex;
        justify-content: center;
    }

    .klæbefolie-img img {
        width: 30%;
        height: 30%;
    }
</style>

<h1 class="klæbe-h1">Klæbefolie</h1>
<div id="main-content" class="centered text-center">
    <div class="content-box">
        <h2 class="klæbe-h2">Selvklæbende folie med print.</h2>
        <p class="klæbe-p">344,- pr. kvadratmeter. Max bredde er 130cm.</p>

        <ul class="klæbe-ul">
            <li class="klæbe-li">Air folie med luftkanaler på klæbersiden, som gør det let at montere uden luftbobler.</li>
            <li class="klæbe-li">Transparent klar folie. Kan ikke printes med hvid blæk.</li>
            <li class="klæbe-li">Oneway folie. Se ud men ikke ind. Hvid på print side og sort på klæberside.</li>
            <li class="klæbe-li">Glasdeko folie med eller uden luftkanaler. Ligner sandblæst glas.</li>
        </ul>
        <p class="klæbe-p">Air folie med luftkanaler på klæbersiden, som gør det let at montere uden luftbobler.</p>
        <p class="klæbe-p">Transparent klar folie. Kan ikke printes med hvid blæk.</p>
        <p class="klæbe-p">Oneway folie. Se ud men ikke ind. Hvid på print side og sort på klæberside.</p>
        <p class="klæbe-p">Glasdeko folie med eller uden luftkanaler. Ligner sandblæst glas.</p>
        <p class="klæbe-p">Alle folier kan konturskæres.</p>

        <h2 class="klæbe-h2">Selvkæbende skærefolie</h2>
        <p class="klæbe-p">250,00 pr. kvadratmeter.</p>
        <ul class="klæbe-ul">
            <li class="klæbe-li">Sort eller hvid folie med overførelsestape.</li>
            <li class="klæbe-li">Kulørt folie med overførelsestape.</li>
            <li class="klæbe-li">Guld eller sølv folie med overførelsestape.</li>
        </ul>
        <p class="klæbe-p">Kan udskæres til tekst, logo osv.</p>

        <h2 class="klæbe-h2">CVR nummer til bil</h2>
        <p class="klæbe-p">125,00 for 1 sæt CVR-numre til erhvervsbil.</p>
        <p class="klæbe-p">300,00 for 1 sæt inkl. montering ved en stk. køretøj. Mindst 30mm høje tal.</p>
    </div>
</div>




<?php get_footer(); ?>
