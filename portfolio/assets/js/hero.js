(function () {

  const el = document.getElementById('hero-text');
  if (!el) return;

  let full = (el.getAttribute('data-words') || '').trim();

  // important : garder les balises
  full = full.replace(/\\n/g, "<br>");

  const words = full.split(/\s+/);
  let i = 0;

  const WORD_DELAY = 380;

  document.fonts.ready.then(startTyping);

  function startTyping() {

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      el.innerHTML = full; // innerHTML au lieu de textContent
      el.style.borderRight = 'none';
      return;
    }

    function step() {
      if (i >= words.length) {
        return;
      }
      el.innerHTML += (i ? ' ' : '') + words[i]; // innerHTML ici
      i++;
      setTimeout(step, WORD_DELAY);
    }

    setTimeout(step, 600);
  }

})();

// Ouvre / ferme le menu fullscreen 

document.getElementById("hamburger").addEventListener("click", () => {
  document.body.classList.toggle("menu-open");
});