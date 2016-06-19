<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '' ); ?></title>

    <?php wp_head(); ?>

  </head>
  <body class="animsition">
    <div>
      <header class="brand-header">
          <div class="container">
              <h1 class="brand-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
              <h6><small><?php bloginfo('description') ?></small></h6>
            <nav class="pull-right">
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'list-inline'
              );
              wp_nav_menu( $defaults );
            ?>
            </nav>
          </div>
      </header>
    </div>
