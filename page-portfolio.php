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
    <section>
      <?php get_template_part('content', 'portfolio'); ?>
    </section>
  </main>
</div>

<?php get_footer(); ?>
