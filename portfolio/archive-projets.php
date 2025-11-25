<?php get_header(); ?>

<section class="projects-section">
    <h2 class="projects-title">Mes projets</h2>

    <div id="projects-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/project-card'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun projet pour le moment.</p>
        <?php endif; ?>
    </div>

</section>

<?php get_footer(); ?>
