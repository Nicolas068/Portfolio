<?php get_header(); ?>

<main class="project-single">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('project-single__article'); ?>>

      <header class="project-single__header">
        <p class="project-single__back">
          <a href="<?php echo esc_url( get_post_type_archive_link('projet') ); ?>">
            ← Retour aux projets
          </a>
        </p>
        <h1 class="project-single__title"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) : ?>
          <p class="project-single__subtitle"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="project-single__thumb">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="project-single__content">
        <?php the_content(); ?>
      </div>

      <footer class="project-single__footer">
        <a class="project-single__back-link"
           href="<?php echo esc_url( get_post_type_archive_link('projet') ); ?>">
          ← Retour aux projets
        </a>
      </footer>

    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
