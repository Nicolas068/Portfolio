<?php
get_header();
?>
<main class="site-main" style="min-height:50vh;padding:40px;color:#fff;background:#000;">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Aucun contenu pour le moment.</p>
  <?php endif; ?>
</main>
<?php
get_footer();
