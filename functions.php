<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scrimps_theme');
add_action('after_setup_theme', 'menues');


function menues()
{
    register_nav_menu('Up Menu', 'Верхнее меню');
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
//    wp_enqueue_style('source_css', get_template_directory_uri() . '/assets/css/default.css');
}

function scrimps_theme()
{
    wp_enqueue_skript('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
    wp_enqueue_skript('init', get_template_directory_uri() . '/assets/js/init.js');
    wp_enqueue_skript('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
    wp_enqueue_skript('jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
    wp_enqueue_skript('migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
    wp_enqueue_skript('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
}

?>
 