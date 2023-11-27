<?php
get_header();
?>

<style>
   .form-content {
       max-width: 600px;
       margin: 0 auto;
       padding: 20px;
       background-color: #f5f5f5;
       border-radius: 8px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }

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

<div class="form-content" >
   <h2 style="color: #E31E26;">Kontakt os</h2>
   <?php echo do_shortcode('[contact-form-7 id="cc77310" title="Contact form 1"]'); ?>
</div>
<div class="test-template-part">
    <?php get_template_part('template-parts/how-it-works/how-it-works'); ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</html>
