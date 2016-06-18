<?php
  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
  if( $query -> have_posts() ) : while( $query -> have_posts() ) : $query -> the_post(); ?>
  <article class="col-xs-6 col-md-3">
    <a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
  </article>
<?php endwhile; endif; wp_reset_postdata();?>
