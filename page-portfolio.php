<?php
/*
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>
<div class="animsition">
  <header class="jumbotron text-center">
    <h1><?php wp_title( '' ); ?></h1>
  </header>
  <main class="container">
    <section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </section>

    <?php
      $args = array(
        'post_type' => 'portfolio'
      );
      $query = new WP_Query( $args );
    ?>

    <section class="row">
      <?php if( $query -> have_posts() ) : while( $query -> have_posts() ) : $query -> the_post(); ?>
        <article class="col-xs-6 col-md-3">
          <a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        </article>
      <?php endwhile; endif; wp_reset_postdata();?>
    </section>
  </main>
</div>

<?php get_footer(); ?>
