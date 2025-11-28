jQuery(function($){

    /* ======================================
       LOAD MORE PROJETS
    ====================================== */
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
                    button.remove();                
                    $('#no-more-projets').fadeIn();
                }
            }
        });

    });



    /* ======================================
       MODALE CONTACT
    ====================================== */

    console.log("main.js chargé ✔");

    // Ouverture modale
    $('a[href$="/contact"], a[href$="/contact/"], a[href*="contact"]').on('click', function (e) {
        e.preventDefault();

        $('#menu-overlay').removeClass('active');
        $('body').removeClass('menu-open');
        $('.hamburger').removeClass('is-active');

        $('#contactModal').addClass('active');
        $('body').addClass('modal-open');
    });

    // Fermeture modale
    $('.contact-modal-close, .contact-modal-overlay').on('click', function () {
        $('#contactModal').removeClass('active');
        $('body').removeClass('modal-open');
    });



    /* ======================================
       BANDEAU COOKIES
    ====================================== */

    const banner = document.getElementById("cookie-banner");
const btnAccept = document.getElementById("cookie-accept");
const btnRefuse = document.getElementById("cookie-refuse");

if (banner && btnAccept && btnRefuse) {

    // Déjà accepté ou refusé → on masque la bannière
    if (
        localStorage.getItem("cookies-accepted") === "true" ||
        localStorage.getItem("cookies-refused") === "true"
    ) {
        banner.style.display = "none";
    } else {
        // 👉 Animation slide-up
        setTimeout(() => {
            banner.classList.add("visible");
        }, 150);
    }

    // Accepter
    btnAccept.addEventListener("click", function () {
        localStorage.setItem("cookies-accepted", "true");
        banner.style.display = "none";
    });

    // Refuser
    btnRefuse.addEventListener("click", function () {
        localStorage.setItem("cookies-refused", "true");
        banner.style.display = "none";
    });
}
});

