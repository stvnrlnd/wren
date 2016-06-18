<?php get_header(); ?>

<div class="container animsition">
  <main>
    <section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
        <p>
          <?php the_content(); ?>
        </p>
      <?php endwhile; endif; ?>
    </section>
    <section>
      <h1 class="text-center">My Portfolio</h1>
      <?php get_template_part('content', 'portfolio'); ?>
    </section>
  </main>
</div>

<?php get_footer(); ?>
