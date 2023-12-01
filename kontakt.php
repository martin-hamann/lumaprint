<?php
/*
Template Name: Kontakt Os
*/

get_header();

?>

<style>
    .form-content {
        max-width: 600px;
        margin: 10vh auto;
        padding: 20px;
        background-color: var(111213);
        border-radius: 8px;
    }
    .wpcf7-form p {
        margin-bottom: 15px;
        color: white;
    }

    .wpcf7-form label {
        display: block;
        font-weight: bold;
    }

    .wpcf7-form input[type="text"],
    .wpcf7-form input[type="email"],
    .wpcf7-form textarea {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input#file-upload-button,
    .wpcf7-form input[type="submit"] {
        background-color: #E31E26;
        color: #fff;
        cursor: pointer;
        border-radius:10%;
        border:none;
    }

    .wpcf7-form input[type="submit"]:hover {
        opacity: 0.8;
        transition: opacity 0.2s ease-in-out;
    }


    .wpcf7-form {
        background-color: #191919;
        padding: 20px;
        border-radius: 4px;
    }

    .wpcf7-form:last-child{
        text-align:center;
    }

    .form-content-text{
        text-align:center;

    }
    p.form-content-text{
        color:#ededed;
    }
    
</style>

<div class="form-content">
    <div class="form-content-text">
        <h2 style="color: #E31E26;">Kontakt Os</h2>
        <p class="kontakt-os-tekst text">Har du spørgsmål, vil have et uforpligtende tilbud, eller vil du lægge en
            bestilling? Tøv ikke med at kontakte os!</p>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="cc77310" title="Contact form 1"]'); ?>
</div>


<?php get_footer(); ?>