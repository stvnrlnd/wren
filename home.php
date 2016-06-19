<?php get_header(); ?>

<div class="animsition">
  <header class="jumbotron text-center">
    <h1><?php wp_title( '' ); ?></h1>
  </header>
  <div class="container">
    <main class="col-md-9">
      <section>
        <?php get_template_part('content', 'posts'); ?>
      </section>
    </main>
    <aside class="col-md-3">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
