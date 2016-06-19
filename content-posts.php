<?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
  <div class="panel panel-default">
    <div class="panel-body">
      <?php if( get_the_post_thumbnail() ) : ?>
        <div class="post-feature-img">
          <img class="img-responsive" src="<?php the_post_thumbnail_url( '' ); ?>" alt="" />
        </div>
      <?php endif; ?>
      <div class="media">
        <div class="media-left media-top hidden-xs hidden-sm">
          <?php
          echo get_avatar( get_the_author_meta( 'ID' ), '72' );
          ?>
        </div>
        <div class="media-body">
          <h1 class="media-heading"><?php the_title(); ?></h1>
          <p class="text-muted"><small>Posted by <?php the_author_posts_link(); ?> on <?php the_time( 'F j, Y' ); ?> in the <?php the_category( ', ' ); ?> category.</small></p>
          <h6>
            <?php echo strip_tags( get_the_excerpt() ); ?>
          </h6>
          <a class="btn btn-default" href="<?php the_permalink(); ?>">Read more <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; else : ?>
  <p>
    <?php _e( 'Yikes! There aren\'t any posts to show right now!' ); ?>
  </p>
<?php endif; ?>
