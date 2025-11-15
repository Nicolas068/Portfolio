<?php get_header(); ?>

<main class="projects-archive">
  <h1 class="projects-title">Mes projets</h1>

  <?php if ( have_posts() ) : ?>
    <div class="projects-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('project-card'); ?>>
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="project-thumb">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>
            <h2 class="project-title"><?php the_title(); ?></h2>
            <p class="project-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
          </a>
        </article>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p>Aucun projet pour le moment.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
