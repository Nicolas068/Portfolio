<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-header__inner">

    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_nh.svg" alt="Logo">
    </a>

    <!-- Texte de la barre -->
    <span class="site-header-text">Web & IT</span>

    <!-- Hamburger -->
    <button class="hamburger" id="hamburger" aria-label="Ouvrir le menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</header>

<!-- Menu plein écran -->
<div class="menu-overlay" id="menu-overlay">

  <!-- Image de fond -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-bg.jpg" alt="" class="menu-bg">

  <!-- Liens du menu -->
  <nav class="menu-links">
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'primary-menu-overlay',
      ]);
    ?>
  </nav>

</div>
