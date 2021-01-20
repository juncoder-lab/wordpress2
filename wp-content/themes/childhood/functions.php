<?php
add_action( 'wp_enqueue_scripts', 'childhoodScripts');
function childhoodScripts () {
    wp_enqueue_style( 'mainStyle', get_stylesheet_uri());
    wp_enqueue_style( 'addStyle', get_template_directory_uri().'/assets/styles/addStyle.css');
    wp_enqueue_script( 'childScripts', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true );
}
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
?>