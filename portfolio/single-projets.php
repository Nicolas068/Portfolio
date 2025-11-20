<?php get_header(); ?>

<main id="site-content" class="single-projet">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
    $annee       = SCF::get('-annee');
    $description = SCF::get('-description');
    $lien        = SCF::get('-lien');
    ?>

    <section class="projet-top">

        <div class="projet-info">
            <h1><?php the_title(); ?></h1>

            <?php if ( $annee ) : ?>
                <p class="projet-annee"><?php echo esc_html( $annee ); ?></p>
            <?php endif; ?>

            <?php if ( $description ) : ?>
                <p class="projet-desc"><?php echo esc_html( $description ); ?></p>
            <?php endif; ?>

            <?php if ( $lien ) : ?>
                <a href="<?php echo esc_url( $lien ); ?>" class="projet-lien" target="_blank">
                    Voir le projet
                </a>
            <?php endif; ?>
        </div>

        <div class="projet-image">
            <?php the_post_thumbnail('large'); ?>
        </div>

    </section>

    <hr class="projet-separateur">

    <!-- 2 AUTRES PROJETS -->
    <section class="projets-suggestions">

        <h2>Autres projets</h2>

        <div class="suggestions-grid">

        <?php
        $args = [
            'post_type'      => 'projet',
            'posts_per_page' => 2,
            'post__not_in'   => [ get_the_ID() ],
            'orderby'        => 'rand'
        ];
        $suggestions = new WP_Query($args);

        if ( $suggestions->have_posts() ) :
            while ( $suggestions->have_posts() ) :
                $suggestions->the_post();
        ?>

            <article class="suggestion-card">
    <a href="<?php the_permalink(); ?>">

        <div class="suggestion-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
        </div>

        <h3><?php the_title(); ?></h3>

    </a>
</article>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

        </div>

        <div class="projet-pagination">
            <?php
            the_post_navigation([
                'prev_text' => '← Projet précédent',
                'next_text' => 'Projet suivant →'
            ]);
            ?>
        </div>

    </section>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
