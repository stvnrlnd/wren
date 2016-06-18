<?php get_header(); ?>

<div class="container">
  <main class="col-md-9 animsition">
    <section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <p class="text-muted text-center">
          Posted by <?php the_author_posts_link(); ?> on <?php the_time( 'F j, Y' ); ?> in the <?php the_category( ', ' ); ?> category.
        </p>
        <hr>
        <?php if( get_the_post_thumbnail() ) : ?>
        <img class="img-responsive" src="<?php the_post_thumbnail_url( '' ); ?>" alt="" />
        <?php endif; ?>
        <?php the_content(); ?>
        <nav class="text-center">
          <ul class="pager">
            <li class="pull-left"><?php previous_post_link( '%link' ); ?></li>
            <li class="pull-right"><?php next_post_link( '%link' ); ?></li>
          </ul>
        </nav>
        <?php echo comments_template(); ?>
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
