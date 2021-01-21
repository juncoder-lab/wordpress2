<?php
add_action( 'wp_enqueue_scripts', 'childhoodScripts');
function childhoodScripts () {
    wp_enqueue_style( 'mainStyle', get_stylesheet_uri());
    wp_enqueue_style( 'addStyle', get_template_directory_uri().'/assets/styles/addStyle.css');
    wp_enqueue_script( 'childScripts', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true );
}
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'nav_menu_link_class', 10, 3);
function nav_menu_link_class($atts, $item, $args) {
    if ($args->menu==='Main') {
        $atts['class']='header__nav-item';
        if ($item->current) {
            $atts['class'].=' header__nav-item-active';
        }
    }
    return $atts;
}
?>