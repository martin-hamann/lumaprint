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
    $tabel = get_field('tabel');
    ?>

    <div class="single-product container-fluid">
        <h1>
            <?php echo $overskrift ?>
        </h1>
        <p>
            <?php echo $beskrivelse ?>
        </p>
        <img src="<?php echo $billede ?>" alt="<?php echo $overskrift ?>">
        <img src="<?php echo $billede2 ?>" alt="<?php echo $overskrift ?>">
        <img src="<?php echo $billede3 ?>" alt="<?php echo $overskrift ?>">
        <div>
            <?php echo $tabel ?>
        </div>
    </div>

<?php endwhile;
?>

<?php the_content(); ?>

<?php get_footer(); ?>