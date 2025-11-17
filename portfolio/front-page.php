<?php get_header(); ?>

<main id="hero" class="hero">
  <div class="hero__bg" aria-hidden="true"></div>

  <!-- Image qui descend (hero) -->
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

  <!-- Texte -->
  <h1 id="hero-text"
     class="hero__text"
     data-words="Nicolas Heim &lt;br&gt; Développeur WordPress &amp; Technicien Informatique">
  </h1>

  <p class="hero__subtext"
     data-words="Bienvenue sur ma page, et merci pour votre visite !">
  </p>
</main>


<!-- ==========================
     SECTION PRÉSENTATION
=========================== -->
<section class="presentation">
  <div class="presentation__inner">
    <h2 class="presentation__title">À propos de moi</h2>
    <p class="presentation__text">
      Passionné par le développement WordPress et les solutions web sur mesure, 
      je conçois des sites modernes, performants et optimisés. 
      Mon objectif est de créer des expériences uniques, adaptées à chaque projet.
    </p>
  </div>
</section>


<!-- ==========================
     SECTION AVEC IMAGE (second-bg)
=========================== -->
<section class="second-bg">
  <img 
    src="<?php echo esc_url( get_template_directory_uri().'/assets/img/ampoule2.jpg' ); ?>"
    alt=""
    class="second-bg-img"
  >
</section>

<?php get_footer(); ?>
