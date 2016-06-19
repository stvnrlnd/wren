<?php get_header(); ?>

<header class="jumbotron text-center">
  <h1><?php wp_title( '' ); ?> Posts</h1>
</header>
<div class="container">
  <main class="animsition">
    <section class="col-md-9">
      <?php get_template_part('content', 'posts'); ?>
    </section>
  </main>
  <aside class="col-md-3">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
