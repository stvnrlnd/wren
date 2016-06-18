<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '' ); ?></title>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <div>
      <header>
          <div class="container">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h3>
              <?php bloginfo('description') ?>
            </h3>
            <nav>
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'nav nav-pills pull-right'
              );
              wp_nav_menu( $defaults );
            ?>
            </nav>
          </div>
      </header>
    </div>
