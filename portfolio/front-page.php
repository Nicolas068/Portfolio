<?php get_header(); ?>
<main id="hero" class="hero">
  <div class="hero__bg" aria-hidden="true"></div>

  <!-- Image du hero qui descend -->
  <div class="hero__image-wrap">
    <img
      class="hero__image"
      src="<?php echo esc_url( get_template_directory_uri().'/assets/img/overlay.jpg' ); ?>"
      alt=""
      width="1600" height="900"
      loading="eager"
      decoding="async"
    >
  </div>

  <!-- 2ème image qui remonte -->
  <div class="hero__image-bottom">
    <img
      class="hero__image2"
      src="<?php echo esc_url( get_template_directory_uri().'/assets/img/ampoule2.jpg' ); ?>"
      alt=""
      width="1600" height="900"
      loading="lazy"
      decoding="async"
    >
  </div>

  <!-- Texte -->
  <h1 id="hero-text"
      class="hero__text"
      data-words="Nicolas Heim  <br> Développeur WordPress & Technicien Informatique">
  </h1>
</main>
<?php get_footer(); ?>
