<?php
//
// add_action('wp_head', 'style_theme');
// add_action('wp_footer', 'scripts_theme');
//
// function style_theme () {
//     wp_enqueue_style('style' , get_stylesheet_uri());
//     wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
//     wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
//     wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri() . '/assets/css/ekko-lightbox.css' );
//     wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
//     wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
// }
//
// function scripts_theme () {
// 	wp_deregister_script( 'jquery' );
// 	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
// 	wp_enqueue_script( 'jquery' );
//     wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], null, true );
//     wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery'], null, true );
//     wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/assets/js/ekko-lightbox.min.js', ['jquery'], null, true );
//     wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true );
//     wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true );
//     wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, false, false );
//     wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', null, false, false );
// }

function my_scr() {
    wp_enqueue_style('style' , get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri() . '/assets/css/ekko-lightbox.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/assets/js/ekko-lightbox.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, false );
    wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', null, null, false );
}

add_action( 'wp_enqueue_scripts', 'my_scr' );


?>
