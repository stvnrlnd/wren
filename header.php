<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <div>
      <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>

            <div class="collapse navbar-collapse" id="primary-menu-collapse">
              <?php
                $defaults = array(
                  'container' => false,
                  'theme_location' => 'primary-menu',
                  'menu_class' => 'nav navbar-nav navbar-right'
                );
                wp_nav_menu( $defaults );
              ?>
            </div>
          </div>
        </nav>
      </header>
    </div>
