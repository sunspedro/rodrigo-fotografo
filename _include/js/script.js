//galeria
Fancybox.bind("[data-fancybox]", {
  animated: true,
  caption: (f, s) => s.caption,
  Thumbs: false,
  Toolbar: { display: ["close"] },
  contentClick: "iterateZoom",
  Images: { zoom: true }
});

(function() {
  const intro = document.getElementById('quem-sou');

  function handleScrollShow() {
    const rect = intro.getBoundingClientRect();
    if (rect.top < window.innerHeight - 120) {
      intro.classList.add('show');
      window.removeEventListener('scroll', handleScrollShow);
    }
  }

  window.addEventListener('scroll', handleScrollShow);
  document.addEventListener('DOMContentLoaded', handleScrollShow);
})();

document.addEventListener("scroll", () => {
  const intro = document.querySelector(".intro");
  const logoPreto = document.querySelector(".logo-preto");
  const logoColorido = document.querySelector(".logo-colorido");

  const scrollY = window.scrollY;
  const headerHeight = document.querySelector("header").offsetHeight;

  const introTop = intro.offsetTop;
  const introBottom = introTop + intro.offsetHeight;

  const start = introTop - headerHeight;
  const end = introBottom - headerHeight;

  let progress = (scrollY - start) / (end - start);

  if (scrollY < start) progress = 0;

  if (scrollY > end) progress = 0;

  progress = Math.min(Math.max(progress, 0), 1);

  logoPreto.style.opacity = 1 - progress;
  logoColorido.style.opacity = progress;
});
