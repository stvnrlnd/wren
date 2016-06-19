<?php
/*
  Template Name: Right Sidebar
*/
 ?>
<?php get_header(); ?>
<div class="animsition">
  <header class="jumbotron text-center">
    <h1><?php wp_title( '' ); ?></h1>
  </header>
  <div class="container">
    <main class="col-md-9">
      <section class="text-center">
        <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
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
    <aside class="col-md-3">
      <?php get_sidebar( 'page' ); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
