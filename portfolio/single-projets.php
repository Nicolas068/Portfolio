<?php get_header(); ?>

<main class="single-projet">

    <?php
    $annee       = SCF::get('projet_annee');
    $description = SCF::get('projet_description');
    $lien        = SCF::get('projet_lien');
    ?>

    <div class="projet-top">

        <!-- Infos à gauche -->
        <div class="projet-info">
          <h2 class="projet-titre"><?php the_title(); ?></h2>

<?php if ($annee) : ?>
    <p class="project-year">
        <span>Année :</span> <?php echo esc_html($annee); ?>
    </p>
<?php endif; ?>

<?php if ($description) : ?>
    <p class="project-description">
        <span>Description :</span> <?php echo esc_html($description); ?>
    </p>
<?php endif; ?>

<?php if ($lien) : ?>
    <p class="project-link">
        <span>Site :</span>

        <span class="project-link-value">
            <a href="<?php echo esc_url($lien); ?>" target="_blank" rel="noopener">
                Lien du site
            </a>

</span>
    </p>
<?php endif; ?>
<div class="single-contact-block">


</div>

        </div>

        <!-- Image à droite -->
        <div class="projet-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('project_square'); ?>
            <?php endif; ?>
        </div>

    </div>

    <hr class="projet-separateur">


    <!-- AUTRES PROJETS -->

    <nav class="single-projet-pagination">
    <?php
        previous_post_link('<span class="prev">%link</span>', '← Projet précédent');
        next_post_link('<span class="next">%link</span>', 'Projet suivant →');
    ?>
</nav>
    <section class="projets-suggestions">
        <h2 class="projects-title">Autres projets</h2>

        <div class="suggestions-grid">

            <?php
            $args = [
                'post_type'      => 'projets',
                'post__not_in'   => [get_the_ID()],
                'posts_per_page' => 2,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ];

            $suggestions = new WP_Query($args);

            if ($suggestions->have_posts()) :
                while ($suggestions->have_posts()) :
                    $suggestions->the_post();

                    // Même card que front-page (design uniforme)
                    get_template_part('template-parts/project-card');

                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Aucun autre projet pour le moment.</p>';
            endif;
            ?>

        </div>
    </section>

    <!-- ==========================
     SECTION CONTACT PROJET
=========================== -->
<section class="single-contact-section">
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



</main>

<?php get_footer(); ?>
