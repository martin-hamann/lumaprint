<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>
        <p>
            <?php the_content() ?>
        </p>
    <?php endwhile ?>
<?php endif; ?>

<!-- Hero Section -->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="images/printer.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-7 fw-bold lh-1 mb-3 hero-headline">LA' OS PRINTE DET FOR DIG</h1>
            <p class="lead hero-sub-headline">Mere end 50 års erfaring med print - samlet i én butik</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-lg px-4 me-md-2 hero-button-1">Kontakt Os</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4 hero-button-2">Se Produkter</button>
            </div>
        </div>
    </div>
</div>


<div class="test-template-part">
    <?php get_template_part('template-parts/how-it-works/how-it-works'); ?>
</div>
<?php get_footer(); ?>