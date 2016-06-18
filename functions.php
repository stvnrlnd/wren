<?php

  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function wren_theme_styles() {
    wp_enqueue_style( 'font_css', 'https://fonts.googleapis.com/css?family=Lato' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'jquery_animsition_css', get_template_directory_uri().'/css/animsition.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri().'/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wren_theme_styles' );

  function wren_theme_scripts() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery_animsition_js', get_template_directory_uri().'/js/animsition.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wren_js', get_template_directory_uri().'/js/wren.js', array('jquery', 'bootstrap_js'), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'wren_theme_scripts' );

  function register_theme_menus() {
    register_nav_menus( array( 'primary-menu' => __( 'Primary Menu' ) ) );
  }
  add_action('init', 'register_theme_menus');

  function wren_excerpt_length( $length ) {
    return 25;
  }
  add_filter( 'excerpt_length', 'wren_excerpt_length', 999 );

?>
