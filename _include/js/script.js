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

//logo
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

  progress = Math.min(Math.max(progress, 0), 1);

  logoPreto.style.opacity = 1 - progress;
  logoColorido.style.opacity = progress;
});

//banner
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(
    ".banner-novo, .intro, .portifolio"
  );

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.01
    }
  );

  sections.forEach(section => observer.observe(section));
});

//entrada-portifolio
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".portifolio");

  if (!section) return;

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("show");
          obs.unobserve(section);
        }
      });
    },
    { threshold: 0.2 }
  );

  observer.observe(section);
});

//scroll
$('a[href*="#"]').on('click', function (e) {
  e.preventDefault();
  var target = $(this).attr("href");
  $('html, body').stop().animate({
    scrollTop: ($(target).offset().top)
  }, 600);
  return false;
});
