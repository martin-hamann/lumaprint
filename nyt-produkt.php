<?php
/*
Template Name: Nyt Produkt
*/

get_header();

?>

<?php
while (have_posts()):
    the_post();
    $overskrift = get_field('overskrift');
    $beskrivelse = get_field('beskrivelse');
    $billede = get_field('billede');
    $table = get_field('table_shortcode');
    $gallery = get_field('gallery_shortcode');
    ?>

    <div class="single-product container-fluid">
        <h1>
            <?php echo $overskrift ?>
        </h1>
        <p>
            <?php echo $beskrivelse ?>
        </p>
        <img src="<?php echo $billede ?>" alt="<?php echo $overskrift ?>">
        <div>
            <?php echo do_shortcode('$table')?>
        </div>
        <div>
            <?php echo do_shortcode('$gallery')?>
        </div>

    </div>
    

<?php endwhile;
?>

<?php get_footer(); ?>