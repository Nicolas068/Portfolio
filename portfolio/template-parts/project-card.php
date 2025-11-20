<?php
$annee       = SCF::get('projet_annee');
$description = SCF::get('projet_description');
$lien        = SCF::get('projet_lien');
?>

<article class="project-card">
    <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('project_square'); ?>
        <?php endif; ?>

        <h3 class="project-title"><?php the_title(); ?></h3>

        <?php if ($annee) : ?>
            <p class="project-year">Année : <?php echo esc_html($annee); ?></p>
        <?php endif; ?>

        <?php if ($description) : ?>
            <p class="project-description">
                <?php echo esc_html($description); ?>
            </p>
        <?php endif; ?>

        <?php if ($lien) : ?>
            <p class="project-link">
                <a href="<?php echo esc_url($lien); ?>" target="_blank" rel="noopener">
                    Voir le site
                </a>
            </p>
        <?php endif; ?>

    </a>
</article>
