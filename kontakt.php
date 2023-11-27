<?php


get_header();
?>

<style>
    /* Add your custom styles here */

    /* Style the form container */
    .form-content {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    <style>
    .wpcf7-form p {
        margin-bottom: 15px;
    }

    .wpcf7-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .wpcf7-form input[type="text"],
    .wpcf7-form input[type="email"],
    .wpcf7-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #E31E26; 
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style the form submit button */
    .wpcf7-form input[type="submit"] {
        background-color: #E31E26;
        color: #fff;
        padding: 10px 15px;
        border: 1px solid #E31E26; 
        border-radius: 25px; 
        cursor: pointer;
    }

    .wpcf7-form input[type="submit"]:hover {
        background-color: #B71C1F; 
    }

    
    .wpcf7-form {
        background-color: #191919; 
        padding: 20px;
        border: 1px solid #E31E26; 
        border-radius: 4px;
    }
</style>

</style>

</style>



<div class="form-content" >
<h2 style="color: #E31E26;">Kontakt os</h2>
    
    <!-- Your contact form shortcode or HTML form goes here -->
    <?php echo do_shortcode('[cf7form cf7key="contact-form-1"]'); ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<!-- Add any additional scripts or closing HTML tags here -->
</body>
</html>
