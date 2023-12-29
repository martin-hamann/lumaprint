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
    $table = get_field('table_shortcode');
    $gallery = get_field('gallery_shortcode');
    ?>

    <div class="single-product container-fluid text-center">
        <h1 class="headline">
            <?php echo $overskrift ?>
        </h1>
        <p class="text">
            <?php echo $beskrivelse ?>
        </p>
        <div class="row single-product-row">
            <div class="col-10 col-lg-4">
                <?php echo do_shortcode($table); ?>
            </div>
        </div>
        <div class="row single-product-row">
            <div class="col-10 col-lg-4">
                <?php echo do_shortcode($gallery); ?>
            </div>
        </div>

    </div>


<?php endwhile;
?>

<?php get_footer(); ?>