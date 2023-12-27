<?php 
function enqueue_styles(){
    wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
    wp_enqueue_script('bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/b2340e7a76.js');

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function my_remove_editor_from_post_type() {
    remove_post_type_support( 'post', 'editor' );
    // remove_post_type_support( 'page', 'editor' );
    }
    add_action("init", "my_remove_editor_from_post_type");
?>