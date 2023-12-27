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
                <a href="http://lumaprint.site/produkter/plakatprint/" class="product-links">
                    <img class="card-img-top" src="<?php the_field('thumbnail');?>"
                        alt="Produkt Thumbnail Billede">
                    <div class="card-body product-card-body">
                        <h5 class="card-title"><?php the_field('produkt-navn'); ?></h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
       
            </div>
        <?php endwhile; ?>

            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/banner/" class="product-links">
                    <img class="card-img-top" src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-banner1.png"
                        alt="Banner">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Banner</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/whiteboard/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-whiteboard-1-e1701219941137.png"
                        alt="Whiteboard">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Whiteboard</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/tegningsplot/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-drawings-e1701219970915.png"
                        alt="Tegningsplot">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Tegningsplot</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>



        </div>


        <div class="row d-flex justify-content-center gap-4 products-row procuts-row-2" id="products-row">
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/check/" class="product-links">
                    <img class="card-img-top" src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-billeder.jpg"
                        alt="Stor Check">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Stor Check</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/klistermaerker/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-sticker-e1701218960267.png"
                        alt="Klistermærker">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Klistermærker</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/a-skilt/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-gadeskilt-e1701218933284.png"
                        alt="A-skilt">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">A-skilt</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/klaebefolie/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-klebefolie-e1701218884144.png"
                        alt="Klæbefolie">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Klæbefolieprint</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


        </div>


        <div class="row d-flex justify-content-center gap-4 products-row procuts-row-1" id="products-row">
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/laminering/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-laminat-e1701219337718.png"
                        alt="Laminering">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Laminering</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/byggepladsskilt/" class="product-links">
                    <img class="card-img-top" src="http://lumaprint.site/wp-content/uploads/2023/11/byggeplads.png"
                        alt="Byggepladsskilt">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Byggepladsskilt</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/skjold/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-skjold-e1701219168489.png"
                        alt="Skjolds til æresport">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Skjold Til Æresport</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/rollup/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/rollup-e1701219099886.png"
                        alt="Rollup Banner">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Rollup Banner</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-center gap-4 products-row procuts-row-1" id="products-row">
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/visitkort/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-visitkort-e1701218825431.png"
                        alt="Visitkort">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Visitkort</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/postkort/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-postkort-e1701218777416.png"
                        alt="Postkort">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Postkort</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/flyers/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-flyers-e1701218694359.png"
                        alt="Flyers">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Flyers</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/skilteplader/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-plader-e1701218632925.png"
                        alt="Skilteplader">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Skilteplader</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>


        </div>
        <div class="row d-flex justify-content-center gap-4 products-row procuts-row-1" id="products-row">
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/kalender/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-kalender-e1701218556744.png"
                        alt="kalender">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Kalender</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>
            <div class="card" style="width: 18rem;">
                <a href="http://lumaprint.site/produkter/postkasse/" class="product-links">
                    <img class="card-img-top"
                        src="http://lumaprint.site/wp-content/uploads/2023/11/Mini-postkasse-e1701218496438.png"
                        alt="Postkassetekst">
                    <div class="card-body product-card-body">
                        <h5 class="card-title">Postkassetekst</h5>
                        <p class="læs-mere-text"> Læs Mere</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



</div>
</div>

<?php get_footer(); ?>