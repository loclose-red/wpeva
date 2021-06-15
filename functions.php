<?php

// initialisation de carbon fields

//include dossier custom-fields pour un carbon fields
add_action('carbon_fields_register_fields',function(){
    require_once __DIR__ . '/inc/custom-fields.php';
});

add_action( 'after_setup_theme', function() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
});

//ci dessous code trouvé sur https://www.matthieu-jalbert.fr/corriger-lerreur-ob_end_flush-sur-wordpress/
// pour corriger le problème d'installation de woocommerce

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
    while ( @ob_end_flush() );
} );


// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', [], wp_get_theme()->get('Version'));
}



//création du menu header
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu() {
    register_nav_menu('header_menu', 'Menu principal');
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

//création du menu footer
add_action('after_setup_theme', 'register_my_menu_footer');
function register_my_menu_footer() {
    register_nav_menu('footer_menu', 'footer');
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// ajout de la fonction images en avant -image à la une-
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//ajout de logo
add_theme_support('custom-logo');

// ajout du fichier de configuration des templates
require get_template_directory() . '/inc/template-functions.php';

// suppression des styles css de woocommerce
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// pour le slider slick
//wp_enqueue_script('slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js', ['jquery'], _S_VERSION, true);
//wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', ['slick'], _S_VERSION, true);