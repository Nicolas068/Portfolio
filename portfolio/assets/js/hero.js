(function () {

  /* ===========================
     MENU HAMBURGER
  ============================ */
  const hamburger = document.getElementById("hamburger");
  if (hamburger) {
    hamburger.addEventListener("click", () => {
      document.body.classList.toggle("menu-open");
    });
  }

  document.addEventListener("DOMContentLoaded", () => {

    /* ===========================
       ANIMATION HERO MOT PAR MOT
    ============================ */

    const image = document.querySelector(".hero__image-wrap");
    const h1 = document.querySelector("#hero-text");
    const p = document.querySelector(".hero__subtext");
    const presentation = document.querySelector(".presentation");
    const mesServices = document.querySelector(".mes_services"); // ← ajouté

    if (!image || !h1 || !p || !presentation) return;

    const h1Span = document.createElement("span");
    const pSpan = document.createElement("span");
    h1.innerHTML = "";
    p.innerHTML = "";
    h1.appendChild(h1Span);
    p.appendChild(pSpan);

    function splitHTMLWords(str) {
      str = str.replace(/\\n/g, "<br>");
      const words = [];
      let buffer = "";
      let insideTag = false;

      for (let i = 0; i < str.length; i++) {
        const char = str[i];

        if (char === "<") insideTag = true;
        if (char === ">") insideTag = false;

        if (char === " " && !insideTag) {
          if (buffer.trim() !== "") words.push(buffer);
          buffer = "";
        } else {
          buffer += char;
        }
      }

      if (buffer.trim() !== "") words.push(buffer);

      return words;
    }

    const wordsH1 = splitHTMLWords(h1.dataset.words || "");
    const wordsP = splitHTMLWords(p.dataset.words || "");
    const WORD_DELAY = 210;

    function typeWords(el, words, onDone) {
      let i = 0;
      el.innerHTML = "";

      function step() {
        if (i >= words.length) {
          if (onDone) onDone();
          return;
        }

        el.innerHTML += (i > 0 ? " " : "") + words[i];
        i++;
        setTimeout(step, WORD_DELAY);
      }

      step();
    }

    image.addEventListener(
      "animationend",
      () => {
        typeWords(h1Span, wordsH1, () => {
          h1.classList.add("show-border");
          typeWords(pSpan, wordsP, () => {

            /* 
             * Quand la présentation apparaît,
             * on fait ensuite apparaître .mes_services
             */
            presentation.classList.add("show");

            if (mesServices) {
              setTimeout(() => {
                mesServices.classList.add("is-visible");
              }, 300); // délai à ajuster si besoin
            }

          });
        });
      },
      { once: true }
    );

    /* ===========================
       AMPOULE CONTACT (FIXÉ)
    ============================ */

    const container = document.getElementById("ampoule-container");
    if (container) {
      fetch("/wp-content/themes/portfolio/assets/ampoule_anime_colored.svg")
        .then((r) => r.text())
        .then((svg) => {
          container.innerHTML = svg;
          container.querySelector("svg").classList.add("presentation__icon-svg");
        });
    }
  });

/* ===========================
   ANIMATION SCROLL SERVICES (RESET)
=========================== */

const serviceBlocks = document.querySelectorAll('.service-block');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {

    if (entry.isIntersecting) {
      // L’élément entre dans le viewport → on joue l'animation
      entry.target.classList.add('visible');
    } else {
      // L’élément sort du viewport → on remet l’animation à zéro
      entry.target.classList.remove('visible');
    }

  });
}, { threshold: 0.3 });

serviceBlocks.forEach(block => observer.observe(block));


})();
