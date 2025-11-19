<?php get_header(); ?>

<main id="site-content" class="site-main single-project">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        $annee       = SCF::get('projet_annee');
        $description = SCF::get('projet_description');
        $lien        = SCF::get('projet_lien');

        // Utilisation de ta même image (si tu veux 2 photos identiques en bas)
        $image_main = get_the_post_thumbnail(null, 'large');
        ?>

        <article class="single-projet-wrapper">

            <!-- CONTENEUR TITRE + IMAGE PRINCIPALE -->
            <div class="single-projet-top">

                <!-- COLONNE GAUCHE = TITRE + INFOS -->
                <div class="single-projet-info">
                    <h1 class="single-projet-title"><?php the_title(); ?></h1>

                    <?php if ($annee) : ?>
                        <p class="single-projet-year"><strong>Année :</strong> <?= esc_html($annee); ?></p>
                    <?php endif; ?>

                    <?php if ($description) : ?>
                        <p class="single-projet-description"><?= esc_html($description); ?></p>
                    <?php endif; ?>

                    <?php if ($lien) : ?>
                        <p class="single-projet-link">
                            <a href="<?= esc_url($lien); ?>" target="_blank">Voir le site</a>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- COLONNE DROITE = IMAGE PRINCIPALE -->
                <div class="single-projet-main-image">
                    <?= $image_main; ?>
                </div>

            </div>

            <!-- TRAIT DE SÉPARATION -->
            <hr class="single-projet-separator">

            <!-- DEUX PHOTOS EN DESSOUS -->
            <div class="single-projet-gallery">
                <div class="gallery-item"><?= $image_main; ?></div>
                <div class="gallery-item"><?= $image_main; ?></div>
            </div>

        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>