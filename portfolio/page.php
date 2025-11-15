<?php get_header(); ?>

<main class="page-main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('page'); ?>>
      <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </header>
      <div class="page-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
