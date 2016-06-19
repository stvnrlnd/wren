<?php get_header(); ?>

<header class="jumbotron text-center">
  <h1><?php wp_title( '' ); ?> Posts</h1>
</header>
<div class="container">
  <main class="animsition">
    <section class="col-md-9">
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <div class="media">
          <div class="media-left media-top">
            <a href="#">
              <?php
                echo get_avatar( get_the_author_meta( 'ID' ), '96' );
              ?>
            </a>
          </div>
          <div class="media-body">
            <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p class="text-muted">
              Posted by <?php the_author_posts_link(); ?> on <?php the_time( 'F j, Y' ); ?> in the <?php the_category( ', ' ); ?> category.
            </p>
            <?php if( get_the_post_thumbnail() ) : ?>
            <img class="img-responsive" src="<?php the_post_thumbnail_url( '' ); ?>" alt="" />
            <?php endif; ?>
            <h3>
              <?php echo strip_tags( get_the_excerpt() ); ?>
            </h3>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p>
          <?php _e( 'Yikes! There aren\'t any posts to show right now!' ); ?>
        </p>
      <?php endif; ?>
    </section>
  </main>
  <aside class="col-md-3">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
