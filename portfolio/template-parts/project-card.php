<?php
// Récupération SCF mais non utilisées dans la card
$annee       = SCF::get('projet_annee');
$description = SCF::get('projet_description');
$lien        = SCF::get('projet_lien');
?>

<article class="project-card">
    <a href="<?php the_permalink(); ?>">

        <div class="project-card__imgwrap">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('project_square'); // 600x480 si défini dans functions.php
            }
            ?>
        </div>

        <h3 class="project-card__title">
            <?php the_title(); ?>
        </h3>

    </a>
</article>
