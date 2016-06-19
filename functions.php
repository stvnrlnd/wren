<?php

  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function wren_theme_styles() {
    wp_enqueue_style( 'font_css', 'https://fonts.googleapis.com/css?family=Dancing+Script|Lato' );
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

  function wren_create_widget( $name, $id, $description ) {
    register_sidebar( array(
      'name' => __( $name ),
      'id' => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div><hr>',
      'before_title' => '<small class="text-uppercase text-muted">',
      'after_title' => '</small>'
    ) );
  }
  wren_create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar.' );
  wren_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of the pages with the blog section.' );

  function wren_excerpt_length( $length ) {
    return 25;
  }
  add_filter( 'excerpt_length', 'wren_excerpt_length', 999 );

?>
