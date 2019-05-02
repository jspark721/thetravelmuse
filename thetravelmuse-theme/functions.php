<?php

if( ! function_exists ('thetravelmuse_setup')) :

    function thetravelmuse_setup() {
      // let WordPress handle the title tags
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
    }

endif;
add_action('after_setup_theme', 'thetravelmuse_setup');

/* register menus */

function register_thetravelmuse_menus() {
    register_nav_menus(
      array(
        'primary' => __('Primary Menu')
      )
    );
}
add_action('init', 'register_thetravelmuse_menus');

/* add stylesheets */

function thetravelmuse_scripts() {
    // enqueue the main stylesheet
    wp_enqueue_style('thetravelmuse_styles', get_stylesheet_uri());
    // enqueue google fonts Lora & Garamound
    wp_enqueue_style('thetravelmuse_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Oswald:200,400|Playfair+Display:400,400i');
}

add_action('wp_enqueue_scripts', 'thetravelmuse_scripts');

function wpb_adding_scripts() {
wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array('jquery'),'1.1', true);
wp_enqueue_script('customjs');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
