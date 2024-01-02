<?php get_header() ?>

<!-- Hero Section -->
<div class="container col-xxl-8 px-4 py-5 hero-container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="http://lumaprint.site/wp-content/uploads/2023/11/printer.png" class="d-block mx-lg-auto img-fluid"
                alt="Lumaprint Printer, print i esbjerg, tryk i esbjerg, la' os printe det for dig" width="700"
                height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-7 fw-bold lh-1 mb-3 hero-headline">LA' OS PRINTE DET FOR DIG</h1>
            <p class="lead hero-sub-headline">Mere end 50 års erfaring med print - samlet i én butik</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="http://lumaprint.site/kontakt-os/"> <button type="button"
                        class="btn btn-lg px-4 me-md-2 hero-button-1">Kontakt Os</button></a>
                <a href="http://lumaprint.site/produkter/"> <button type="button"
                        class="btn btn-outline-secondary btn-lg px-4 hero-button-2">Se Produkter</button></a>
            </div>
        </div>
    </div>
</div>


<div class="test-template-part container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="din-printbutik headline text-center">Din Printbutik I Hjertet Af Esbjerg</h3>
            <p class="din-printbutik-text text-center text">Vi er din partner inden for printløsninger. Vi leverer
                skarpe og
                professionelle trykprodukter, der passer til dine behov. Fra skræddersyede designs til hurtig produktion
                –
                vi
                bringer dine ideer til live med kvalitetsprint.</p>
            <?php get_template_part('template-parts/how-it-works/how-it-works'); ?>
        </div>
    </div>
</div>

<?php
$kreation = new WP_Query(
    array(
        'post_type' => 'kreation',
        'posts_per_page' => -1,
    )
);

?>

<h3 class="din-printbutik headline text-center">Del Dine Kreationer</h3>
<p class="din-printbutik-text text-center text">Del fotos eller videoer af dine seneste kreationer med os. Brug
    hashtagget #lumaprint for at deltage i fællesskabet. Lad os gøre dette sted til et galleri af uendelige muligheder.
    Klar, parat, print! </p>


<div class="logo-container">
    <?php
    while ($kreation->have_posts()):
        $kreation->the_post();
        ?>
        <div class="logo-img">
            <img src="<?php the_field('kreation-logo'); ?>">
        </div>
    <?php endwhile; ?>
</div>


<div class="google-reviews-container">

    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>

</div>


<?php get_footer(); ?>