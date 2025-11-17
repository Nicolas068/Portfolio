(function () {

  const image = document.querySelector(".hero__image-wrap");
  const h1 = document.querySelector("#hero-text");
  const p = document.querySelector(".hero__subtext");
  const presentation = document.querySelector(".presentation");

  if (!image || !h1 || !p || !presentation) return;

  // Créer un span interne pour le texte animé
  const h1Span = document.createElement("span");
  const pSpan = document.createElement("span");

  h1.innerHTML = "";
  p.innerHTML = "";

  h1.appendChild(h1Span);
  p.appendChild(pSpan);

  // Parse texte
  const parseWords = el => {
    let txt = (el.dataset.words || "").trim();
    return txt.replace(/\\n/g, "<br>").split(/\s+/);
  };

  const wordsH1 = parseWords(h1);
  const wordsP = parseWords(p);

  const WORD_DELAY = 380;

  // Fonction mot par mot (sur le span)
  function typeWords(el, words, onDone) {
    let i = 0;
    el.innerHTML = "";

    function step() {
      if (i >= words.length) {
        if (typeof onDone === "function") onDone();
        return;
      }
      el.innerHTML += (i ? " " : "") + words[i];
      i++;
      setTimeout(step, WORD_DELAY);
    }

    step();
  }

  // 1. Attendre la fin de l'animation de l'image
  image.addEventListener("animationend", () => {

    // 2. H1 mot par mot dans le SPAN
    typeWords(h1Span, wordsH1, () => {

      // → Cadre après FIN du mot-par-mot
      h1.classList.add("show-border");

      // 3. Sous-texte
      typeWords(pSpan, wordsP, () => {

        // 4. Section présentation
        presentation.classList.add("show");
      });
    });

  }, { once: true });

})();
