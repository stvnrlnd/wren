<?php
/*
  Template Name: Right Sidebar
*/
 ?>
<?php get_header(); ?>

<div class="container">
  <main class="col-md-9">
    <section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <h1 class="text-center"><?php the_title(); ?></h1>
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
  <aside class="col-md-3">
    <p>
      Sidebar
    </p>
  </aside>
</div>

<?php get_footer(); ?>
