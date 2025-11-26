<?php
/*
Template Name: À propos
*/
get_header();

$img = get_template_directory_uri() . '/assets/img/apropos.jpg';
?>

<section class="apropos">

  <div class="apropos__image-container">

    <!-- IMAGE -->
    <img src="<?php echo esc_url($img); ?>" alt="" class="apropos__image">

    <!-- TITRE DANS L'IMAGE -->
    <h1 class="apropos__title"><?php the_title(); ?></h1>

    <!-- PORTRAIT DANS L'IMAGE -->
    <div class="apropos__photo-wrap">
      <img 
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/portrait.jpg' ); ?>"
        class="apropos__photo"
        alt="Portrait"
      >
    </div>

    <!-- TEXTE SUR L'IMAGE -->
    <div class="apropos__text">
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
    </div>

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
