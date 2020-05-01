<?php

function hogwarts_scripts()
{
    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome-style','https://use.fontawesome.com/releases/v5.13.0/css/all.css' );
    wp_enqueue_style( 'lightbox-style',get_template_directory_uri().'/css/lightbox.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true ) ;
    wp_enqueue_script('lightbox-js', get_template_directory_uri().'/js/lightbox-plus-jquery.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('custom-js',get_template_directory_uri().'/js/Hogwarts.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'hogwarts_scripts');



function remove_admin_bar(){
    show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

require_once('class-wp-bootstrap-navwalker.php');

function register_my_menu() {
    register_nav_menu('primary',__('Primary Menu'));
}
add_action('init', 'register_my_menu');

?>