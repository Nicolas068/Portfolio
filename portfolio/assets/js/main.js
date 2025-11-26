jQuery(function($){

    $('#load-more-projets').on('click', function () {

        let button = $(this);
        let page = parseInt(button.attr('data-page'));

        $.ajax({
            url: loadmore.ajaxurl,
            type: 'POST',
            data: { 
                action: 'load_more_projets',
                page: page 
            },
            success: function (response) {

                if ($.trim(response) !== '') {

                    $('#projects-grid').append(response);
                    button.attr('data-page', page + 1);

                } else {
                    button.remove();                // cacher le bouton
                    $('#no-more-projets').fadeIn(); // afficher le message
                }
            }
        });

    });

});


    /* ========== MODALE CONTACT ========== */
jQuery(function ($) {

    console.log("main.js chargé ✔");

    /* -------- OUVERTURE DE LA MODALE SUR TOUS LES LIENS CONTACT -------- */
    $('a[href$="/contact"], a[href$="/contact/"], a[href*="contact"]').on('click', function (e) {
        e.preventDefault();

        console.log("clic contact détecté ✔");

        // 1. Fermer le menu plein écran si ouvert
        $('#menu-overlay').removeClass('active');
        $('body').removeClass('menu-open');
        $('.hamburger').removeClass('is-active');

        // 2. Ouvrir la modale
        $('#contactModal').addClass('active');
        $('body').addClass('modal-open'); // bloque le scroll
    });


    /* -------- FERMETURE DE LA MODALE -------- */
    $('.contact-modal-close, .contact-modal-overlay').on('click', function () {
        $('#contactModal').removeClass('active');
        $('body').removeClass('modal-open'); // réactive le scroll
    });

});


