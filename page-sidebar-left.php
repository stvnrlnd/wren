<?php
/*
  Template Name: Left Sidebar
*/
 ?>
<?php get_header(); ?>
<header class="jumbotron text-center">
  <h1><?php wp_title( '' ); ?></h1>
</header>
<div class="container">
  <aside class="col-md-3">
    <h3 class="text-center">
      Sidebar
    </h3>
    <hr>
  </aside>
  <main class="col-md-9 animsition">
    <section class="text-center">
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <h1><?php the_title(); ?></h1>
        <hr>
        <p>
          <?php the_content(); ?>
        </p>
      <?php endwhile; else : ?>
        <p>
          <?php _e( 'Yikes! There aren\'t any posts to show right now!' ); ?>
        </p>
      <?php endif; ?>
    </section>
  </main>
</div>

<?php get_footer(); ?>
