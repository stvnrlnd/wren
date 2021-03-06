<?php get_header(); ?>

<div class="animsition">
  <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
  <?php if( get_the_post_thumbnail() ) : ?>
  <div class="post-header-img">
    <img class="img-responsive" src="<?php the_post_thumbnail_url( '' ); ?>" alt="" />
  </div>
  <?php endif; ?>
  <div class="container">
    <main class="col-md-9">
      <section>
          <h1 class="text-center"><?php the_title(); ?></h1>
          <p class="text-muted text-center">
            Posted by <?php the_author_posts_link(); ?> on <?php the_time( 'F j, Y' ); ?> in the <?php the_category( ', ' ); ?> category.
          </p>
          <hr>
          <?php the_content(); ?>
          <nav class="text-center">
            <ul class="pager">
              <li class="pull-left"><?php previous_post_link( '%link' ); ?></li>
              <li class="pull-right"><?php next_post_link( '%link' ); ?></li>
            </ul>
          </nav>
          <?php echo comments_template(); ?>
      </section>
    </main>
  <?php endwhile; endif; ?>
    <aside class="col-md-3">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
