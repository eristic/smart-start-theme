<?php

function add_theme_scripts() {

// ENQUEUE STYLES
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'google-fonts', "//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic", array(), '1.0', 'all');
 
  wp_enqueue_style( 'fancy-box', get_template_directory_uri() . '/css/fancybox.css', array(), '1.0', 'all');

// ENQUEUE SCRIPTS
  
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing-1.3.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'gmap', get_template_directory_uri() . '/js/jquery.gmap.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array ( 'jquery' ), 1.0, true);
  
  wp_enqueue_script( 'smartStartSlider', get_template_directory_uri() . '/js/jquery.smartStartSlider.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array (), 1.0, true);

  wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array (), 1.0, true);

  wp_enqueue_script( 'selectivizr', get_template_directory_uri() . '/js/selectivizr-and-extra-selectors.min.js', array (), 1.0, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// REGISTER MENUS

function register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_menus' );