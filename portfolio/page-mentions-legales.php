<?php
/*
Template Name: Mentions légales
*/
get_header();
?>

<article class="page-mentions-legales">
    
    <h1>Mentions légales</h1>

    <?php 
    while (have_posts()) : the_post();
        the_content(); 
    endwhile; 
    ?>

</article>

<?php get_footer(); ?>
