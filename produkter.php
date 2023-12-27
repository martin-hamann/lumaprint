<?php
/*
Template Name: Produkter
*/

get_header();

?>
<div class="hiw-container">
    <div class="container-fluid steps-container">
        <h3>Hvordan fungerer det?</h3>
        <div class="row gap-5 d-flex justify-content-center">
            <div class="card mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header headline">
                    <h2 class="card-headline headline">1.</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Gennemsøg vores produkter og vælg lige det der passer dig. Uanset om det er
                        plakat, print eller noget helt andet.</p>
                </div>
            </div>
            <div class="card mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header headline ">
                    <h2 class="card-headline headline">2.</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Send os en mail med dit design, produkt, størrelse, og andre detaljer du
                        har i tankerne.</p>
                </div>
            </div>
            <div class="card mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header headline">
                    <h2 class="card-headline headline">3.</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Vi sender dig et uforpligtende tilbud, og så snart du godkender kickstarter
                        vi produktionen </p>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
$produkt = new WP_Query(
    array(
        'post_type' => 'produkt',
        'posts_per_page' => -1,
    )
);
?>

<div class="products-container">
    <h3 class="headline">Alle Produkter</h3>
    <div class="row d-flex justify-content-center gap-4 products-row procuts-row-1" id="products-row">

        <?php
        while ($produkt->have_posts()):
            $produkt->the_post();
            ?>
            <div class="card" style="width: 18rem;">
                <a href="<?php the_field('link'); ?>" class="product-links">
                    <img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="Produkt Thumbnail Billede">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">
                            <?php the_field('produkt-navn'); ?>
                        </h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>

            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>