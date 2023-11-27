<?php function ad_remove_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "ad_remove_gutenberg");

function luma_get_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_directory_uri('style.css'));
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
}

add_action('wp_enqueue_scripts', 'luma_get_stylesheet');
?>