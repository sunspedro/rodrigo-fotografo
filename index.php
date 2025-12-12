<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="preconnect" href="https://cdn.jsdelivr.net" />
  <link rel="stylesheet" href="css/reset.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  <link rel="stylesheet" href="css/index.min.css" />
  <meta name="description" content="Fotógrafo especializado em retratos naturais, paisagens e cenas cotidianas. Portfólio autoral com estilo leve, espontâneo e cheio de sensibilidade.">
  <title>Rodrigo Paim — Portfólio</title>
</head>
<body>
<header>
  <div class="logo-wrapper">
    <img src="img/logo-preto.webp" class="logo logo-preto" alt="Logo preto de Rodrigo Paim" title="Logo preto — Rodrigo Paim">
    <img src="img/logo-colorido.webp" class="logo logo-colorido" alt="Logo colorido de Rodrigo Paim" title="Logo colorido — Rodrigo Paim">
  </div>
</header>

<main>
  <section class="banner animate" id="intro" role="banner">
    <div class="container-fluid p-0">
      <div class="bg-image-right">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-lg-6 h-100">
              <div class="banner-text-container h-100">
                <div class="banner-text">
                  <h1 class="banner-title">Rodrigo Paim</h1>
                  <p class="banner-sub mb-2">Portfólio profissional</p>
                  <p class="description">Trazendo profissionalismo, estética e agregando valor para sua ideia.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 h-100 d-flex align-items-center justify-content-end">
              <img class="banner-image" src="img/banner-rodrigo.webp" alt="Retrato de Rodrigo Paim" title="Retrato profissional de Rodrigo Paim" width="700" height="700"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="intro" id="quem-sou">
    <div class="container">
      <div class="row">
        <div class="intro-text col-12">
          <h2 class="intro-title">Quem sou</h2>
          <div class="intro-body">
              <p class="description">Sou Rodrigo, 20 anos, criador visual brasileiro.Trabalho com edição desde os 10 anos, quando comecei fazendo vídeos para o YouTube e, ao longo do tempo, me descobri na fotografia e na produção de vídeo. Hoje atuo como um artista visual completo, unindo experiência prática e formação técnica.</p>
              <p class="description">Tenho cursos em Design, Fotografia e Adobe Photoshop (minha ferramenta de maior domínio). Trabalho com edição de vídeos, correção de cor, efeitos sonoros, cortes dinâmicos, gameplays, além de criar miniaturas para diversos nichos.</p>
              <p class="description">Busco sempre unir técnica, criatividade e narrativa visual em tudo o que produzo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portifolio" id="portifolio">
    <div class="container">
      <div class="row">
        <div class="intro-text col-12">
          <h2 class="portifolio-title">Portifólio</h2>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-4">
          <a data-fancybox="galeria-amigos" href="img/amigos/1.webp">
            <article class="portifolio-item" aria-label="Retratos Naturais">
              <div class="portifolio-imagem">
                <img  src="img/amigos/1.webp" class="img-fluid lazyload"width="500"height="750"loading="lazy"alt="Retrato natural — fotografia de pessoa"title="Retrato Natural — Galeria de Amigos"
                />
              </div>
              <div class="portifolio-text">
                <p class="title">Retratos Naturais</p>
                <p class="description">Um olhar simples e verdadeiro sobre quem você é.</p>
                <p class="description">Retratos que guardam emoção, leveza e autenticidade.</p>
              </div>
            </article>
          </a>
          <?php for($i=2;$i<20;$i++): ?>
            <a data-fancybox="galeria-amigos" href="img/amigos/<?php echo $i ?>.webp" title="Foto da galeria Amigos — <?php echo $i ?>">
              <img src="img/amigos/<?php echo $i ?>.webp"alt="Foto da galeria Amigos número <?php echo $i ?>"title="Retrato Natural — imagem <?php echo $i ?>"style="display:none"
              >
            </a>
          <?php endfor; ?>
        </div>

        <div class="col-lg-4">
          <a data-fancybox="galeria-lugares" href="img/lugares/01.webp">
            <article class="portifolio-item" aria-label="Paisagens Cotidianas">
              <div class="portifolio-imagem">
                <img src="img/lugares/01.webp" class="img-fluid lazyload"width="500"height="750"loading="lazy"alt="Paisagem fotografada por Rodrigo Paim" title="Paisagens Cotidianas — Fotografia"
                />
              </div>
              <div class="portifolio-text">
                <p class="title">Paisagens Cotidianas</p>
                <p class="description">Paisagens e ambientes que chamaram minha atenção e se transformaram em registros fotográficos cuidadosamente observados.</p>
              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4">
          <a data-fancybox="galeria-outros" href="img/item.webp">
            <article class="portifolio-item" aria-label="Outros">
              <div class="portifolio-imagem">
                <img src="img/item.webp"class="img-fluid lazyload"width="500"height="750"loading="lazy"alt="Foto diversa pertencente à categoria Outros"title="Galeria Outros — Fotografia variada"
                />
              </div>
              <div class="portifolio-text">
                <p class="title">Outros</p>
                <p class="description">Coleção variada de fotos</p>
              </div>
            </article>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="contato mx-auto" id="contato">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 text-center">
          <h2 class="contato-title">Contato</h2>
        </div>
        <div class="col-lg-6">
          <ul class="contato-list">
            <li>
              <a class="contato-link" href="https://wa.me/555499732712" title="Conversar no WhatsApp">
                  <i class="fa-brands fa-whatsapp"></i> WhatsApp
              </a>
            </li>
            <li>
              <a class="contato-link" href="mailto:ruodrigpaim@gmail.com" title="Enviar email">
                  <i class="fa-solid fa-envelope"></i> Email
              </a>
            </li>
            <li>
              <a class="contato-link" href="https://www.instagram.com/ruodrig/" title="Visitar Instagram">
                  <i class="fa-brands fa-instagram"></i> Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

<footer class="footer">
  <div class="container-fluid py-5">
    <div class="row d-flex">
      <div class="col-lg-4 col-md-6 footer-logo">
        <img src="img/logo-colorido.webp" alt="Logo colorido de Rodrigo Paim" title="Logo Colorido — Rodrigo Paim">
      </div>

        <div class="col-lg-4 col-md-6">
          <h3 class="footer-title">Navegação</h3>
          <nav class="footer-nav">
            <a href="#intro">Intro</a>
            <a href="#quem-sou">Quem sou</a>
            <a href="#portifolio">Portfólio</a>
            <a href="#contato">Contato</a>
          </nav>
        </div>
        <div class="col-lg-4 col-md-12">
          <h3 class="footer-title">Conecte-se comigo</h3>
          <div class="footer-social">
            <a href="https://wa.me/555499732712"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            <a href="https://www.instagram.com/ruodrig/"><i class="fa-brands fa-instagram"></i> Instagram</a>
            <a href="mailto:ruodrigpaim@gmail.com"><i class="fa-solid fa-envelope"></i> Email</a>
            <a href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 — Todos os direitos reservados. Desenvolvido por <a href="https://wa.me/5554984036584">Pedro Suns</a>.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <script src="_include/js/script.js"></script>

</body>
</html>
