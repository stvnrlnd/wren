<?php get_header(); ?>

<div class="container animsition">
  <main class="col-md-9">
    <section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <?php the_field('images'); ?>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <hr>
        <p>
          <?php the_field( 'description' ); ?>
        </p>
        <nav class="text-center">
          <ul class="pager">
            <li><?php previous_post_link(); ?> </li>
            <li><?php next_post_link(); ?></li>
          </ul>
        </nav>
      <?php endwhile; else : ?>
        <p>
          <?php _e( 'Yikes! There aren\'t any posts to show right now!' ); ?>
        </p>
      <?php endif; ?>
    </section>
  </main>
  <aside class="col-md-3">
    <h3 class="text-center">
      Sidebar
    </h3>
    <hr>
  </aside>
</div>

<?php get_footer(); ?>
