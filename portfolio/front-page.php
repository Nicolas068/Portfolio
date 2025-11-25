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
     data-words="<strong>Nicolas</strong> <strong>Heim</strong> <br>Développeur WordPress & Technicien Informatique">
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
      Passionné par la création de solutions web sur mesure, je conçois des sites WordPress modernes, performants et optimisés. Mon objectif est de proposer une expérience unique, pensée pour chaque projet.
      Après une première carrière réussie dans les systèmes d’information, cinq ans comme technicien et deux ans comme responsable SI, j’ai choisi de me réorienter vers le développement WordPress. 
      Ce choix est né d’un besoin essentiel : retrouver la dimension créative qui me manquait dans l’informatique traditionnelle.
      Le développement WordPress s’est imposé comme une évidence, alliant technique, design et liberté de création. Aujourd’hui, je mets ces compétences au service de projets professionnels et personnalisés.
      Vous avez une question, un projet ou une idée ?
    </p>

    <div class="presentation__icon-row">

      <span class="presentation__icon-text left">Un projet, une idée ?</span>

      <a href="/contact" class="presentation__icon-link">
  <svg class="presentation__icon-svg" xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 512 512" width="60" height="60" fill="#E3AB53">
    <path d="M467 61H45C20.3 61 0 81.3 0 106v300c0 24.7 20.3 45 45 45h422c24.7 0 45-20.3 45-45V106c0-24.7-20.3-45-45-45zm-6.2 60L256 275.9 51.2 121h409.6zM45 376.7V151l157.1 121.9L45 376.7zm29.8 28.3l158.6-123.1 22.6 17.5c5.4 4.2 13 4.2 18.4 0l22.6-17.5 158.6 123.1H74.8zm392.2-28.3L309.9 272.9 437 151v225.7z"/>
  </svg>
</a>


      <span class="presentation__icon-text right">Contactez-moi !</span>

    </div>
  </div>
</section>


<!-- ==========================
     SECTION MES SERVICES
=========================== -->
<section>
  <h2 class="mes_services">Mes services</h2>
</section>


<!-- SECTION AVEC IMAGE (second-bg) -->
<section class="second-bg">
  <img 
    src="<?php echo esc_url( get_template_directory_uri().'/assets/img/ampoule2.jpg' ); ?>"
    alt=""
    class="second-bg-img"
  >

  <div class="services-scroll">

    <div class="service-block from-left">
      <h3>WordPress</h3>
      <ul>
        <li>Création de site WordPress</li>
        <li>Refonte de site</li>
        <li>Développement sur mesure</li>
        <li>Optimisation des performances</li>
        <li>Maintenance et mise à jour</li>
        <li>Hébergement</li>
        <li>Référencement</li>
      </ul>
    </div>

    <div class="service-block from-right">
      <h3>Informatique</h3>
      <ul>
        <li>Maintenance informatique</li>
        <li>Assistance utilisateurs</li>
        <li>Gestion de parc</li>
        <li>Sécurisation de postes</li>
        <li>Installation & configuration</li>
        <li>Formation personnalisée</li>
        <li>Conseil et bonnes pratiques</li>
      </ul>
    </div>

  </div>
</section>


<!-- ==========================
     SECTION PROJETS
=========================== -->
<section class="projects-section">
    <h2 class="projects-title">Mes projets</h2>

    <div id="projects-grid">
        <?php
        $args = array(
            'post_type'      => 'projets',
            'posts_per_page' => 6, 
            'orderby'        => 'date',
            'order'          => 'DESC'
        );

        $projects = new WP_Query($args);

        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                get_template_part('template-parts/project-card');
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucun projet disponible pour le moment.</p>';
        endif;
        ?>
    </div>

    <div class="load-more-container">
        <button id="load-more-projets" data-page="1">Charger plus</button>
    </div>
</section>

<!-- ==========================
     FORMATION & EXPÉRIENCE
=========================== -->
<section class="experience-section">
  <h2 class="experience-title">Formations et expériences professionnelles</h2>

  <div class="experience-container">

    <div class="experience-block">
      <h3>Développeur WordPress</h3>
      <p>Formation professionnelle – OpenClassrooms (2025)</p>
      <p>Spécialisation : thèmes sur mesure, optimisation, intégrations avancées, bonnes pratiques WordPress.</p>
      <h3>Responsable des Systèmes d’Information</h3>
      <p>2 ans – Secteur médico-social</p>
      <p>Gestion réseau, sécurité, coordination projets, administration systèmes.</p>
      <h3>Technicien informatique</h3>
      <p>5 ans d’expérience</p>
      <p>Maintenance, support utilisateurs, déploiement,gestion de parc, configuration,installation .</p>
      <h3>Diplôme et Formation</h3>
      <p>2025 Développeur Worpdress OpenClassroom</p>
      <p>2020 Technicien d'assistance en Informatique CRM Mulhouse</p>
      <p>2019 Certification CISCO Essentiel IT</p>
      <p>2019 Passeport de compétances informatique Européen </p>
   </div>
  </div>
  
</section>


<?php get_footer(); ?>
