<?php
/*
Template Name: Politique de confidentialité
*/
get_header();
?>

<article class="page-mentions-legales">  <!-- même classe = même CSS -->

    <h1>Politique de confidentialité</h1>

    <?php 
    while (have_posts()) : the_post();
        the_content();
    endwhile; 
    ?>

</article>

<?php get_footer(); ?>
