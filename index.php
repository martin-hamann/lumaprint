<?php get_header(); ?>

<!-- Your custom content goes here -->

<?php
// Example loop to display posts
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
        <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e('No content found', 'Luma'); ?></p>
    <?php
endif;
?>


<?php get_footer(); ?>