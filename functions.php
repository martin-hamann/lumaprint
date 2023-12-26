<?php function luma_get_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() , '/style.css');

}

add_action('wp_enqueue_scripts', 'luma_get_stylesheet');


function enqueue_bootstrap(){
    wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts','enqueue_bootstrap');


function enqueue_fa(){
    wp_enqueue_script('fa', 'https://kit.fontawesome.com/b2340e7a76.js');
}

add_action('wp_enqueue_scripts', 'enqueue_fa');
?>