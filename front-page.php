<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <p><?php the_content() ?></p>
        <?php endwhile ?>
    <?php endif; ?>

<div class="test-template-part">
    <?php get_template_part('template-parts/how-it-works/how-it-works'); ?>
</div>
<?php get_footer(); ?>


<?php get_header(); ?>


<?php get_footer(); ?>