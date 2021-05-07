<?php
    function load_stylesheets() {



        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');


        wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('stylesheet');



    }
add_action('wp_enqueue_scripts', 'load_stylesheets');



    function include_jquery() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);
        add_action('wp_enqueue_scripts', 'jquery');
    }
    add_action('wp_enqueue_scripts', 'include_jquery');


    function load_js() {
        wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('customjs');
    }
    add_action('wp_enqueue_scripts', 'load_js');

      function load_bootstrap_js() {
        wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
        wp_enqueue_script('bootstrapjs');
    }
    add_action('wp_enqueue_scripts', 'load_bootstrap_js');


    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    

    register_nav_menus(
            [
            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
            ]
        );

    add_image_size('smallest', 300, 300, true);
    add_image_size('largest', 800, 800, true);



    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );


    register_default_headers( array(
        'kami-logo' => array(
            'url'   => get_stylesheet_directory_uri() . '/images/hambleton-hall-logo.svg',
            'thumbnail_url' => get_stylesheet_directory_uri() . '/images/hambleton-hall-logo.svg',
            'description'   => __( 'Kami Logo', 'fun' )
        )
    ));
    
    add_theme_support( 'custom-header', array(
        'default-image'   => get_stylesheet_directory_uri() . '/images/hambleton-hall-logo.svg',
        'width'           => 120,
        'height'          => 120,
        'header-selector' => '.site-title a',
        'header-text'     => false
    ) );

?>