<?php
get_header();

// Page actuelle
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// Query : 6 projets
$args = [
    'post_type'      => 'projets',
    'posts_per_page' => 6,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC'
];

$query = new WP_Query($args);
?>

<section class="projects-section">
    <h2 class="projects-title">Mes projets</h2>

    <div id="projects-grid">
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part('template-parts/project-card'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun projet pour le moment.</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>

    <div class="load-more-container">
        <button id="load-more-projets"
                data-page="1">
            Charger plus
        </button>

        <p id="no-more-projets">Pas d’autre projet pour le moment.</p>
    </div>
</section>


<section class="single-contact-section archive-contact">
    <div class="single-contact-wrapper">

        <div class="single-contact-container">

            <span class="single-contact-text">Un projet, une idée ?</span>

            <a href="/contact" class="single-contact-link">
                <svg class="single-contact-icon" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="none" stroke="#E3AB53"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </a>

            <span class="single-contact-text">Contactez-moi !</span>

        </div>

    </div>
</section>

<?php get_footer(); ?>
