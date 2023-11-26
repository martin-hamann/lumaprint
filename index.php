<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUMAPRINT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<header> 
<?php get_header(); ?>
<h1>Welcome to the website</h1>
</header>


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


<div class="test-template-part">
    <?php get_template_part('template-parts/how-it-works/how-it-works'); ?>
</div>
<?php get_footer(); ?>