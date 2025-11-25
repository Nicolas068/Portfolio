<?php wp_footer(); ?>

<!-- ===== MODALE DE CONTACT ===== -->
<div class="contact-modal" id="contactModal">
    <div class="contact-modal-overlay"></div>

    <div class="contact-modal-content">
    <img class="contact-modal-bg" src="/wp-content/themes/portfolio/assets/img/plantcontact.jpg" alt="">


        <button class="contact-modal-close">&times;</button>

        <form class="contact-modal-form" method="post" action="#">

            <h2>Contactez-moi</h2>

            <div class="modal-row">
                <input type="text" name="nom" placeholder="Nom *" required>
                <input type="text" name="prenom" placeholder="Prénom *" required>
            </div>

            <input type="email" name="email" placeholder="Adresse email *" required>

            <input type="text" name="telephone" placeholder="Téléphone">

            <textarea name="message" placeholder="Votre message *" required></textarea>

            <button type="submit" class="modal-submit">Envoyer</button>

        </form>

    </div>
</div>

<footer class="site-footer">
  <div class="footer-inner">

    <!-- Colonne 1 : identité -->
    <div class="footer-col footer-col--brand">
      <h2 class="footer-name">Nicolas Heim</h2>
      <p class="footer-tagline">Développeur WordPress & Technicien informatique</p>
      <p class="footer-location">Basé en Alsace, France</p>
      <p class="footer-cv">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/cv-nicolas-heim.pdf" 
           target="_blank" 
           rel="noopener">
           Curriculum Vitae (PDF)
        </a>
    </p>

    </div>

    <!-- Colonne 2 : navigation -->
    <div class="footer-col footer-col--nav">
      <h3 class="footer-title">Navigation</h3>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
        <li><a href="<?php echo esc_url( home_url( '/projets/' ) ); ?>">Projets</a></li>
        <li><a href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>">À propos</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
      </ul>
    </div>

    <!-- Colonne 3 : contact + réseaux -->
    <div class="footer-col footer-col--contact">
      <h3 class="footer-title">Contact</h3>
      <p class="footer-email">
        <a href="mailto:contact@ton-domaine.fr">nicolas.heim068@gmail.com</a>
      </p>

      <ul class="footer-social">
         <li><a href="https://www.histoire-numerique.fr" target="_blank" rel="noopener">Histoire Numérique</a></li>
        <li><a href="https://www.linkedin.com/in/nicolas-heim-036750183/" target="_blank" rel="noopener">LinkedIn</a></li>
        <li><a href="https://github.com/Nicolas068" target="_blank" rel="noopener">GitHub</a></li>
        <!-- <li><a href="/cv-nicolas-heim.pdf" target="_blank" rel="noopener">Télécharger mon CV</a></li> -->
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <p class="footer-copy">
      © <?php echo date('Y'); ?> Nicolas Heim. Tous droits réservés.
    </p>

    <ul class="footer-legal">
      <li><a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>">Mentions légales</a></li>
      <li><a href="<?php echo esc_url( home_url( '/politique-de-confidentialite/' ) ); ?>">Politique de confidentialité</a></li>
    </ul>
  </div>
</footer>

</body>




</html>