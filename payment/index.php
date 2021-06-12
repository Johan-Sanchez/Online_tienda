<?php require_once('../admin/config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>subscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../css2/registro.css" />
  <link rel="stylesheet" href="../css2/estilos.css">
  <link rel="stylesheet" href="../css2/mujer.css">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- Load Stripe.js on your website. -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./script.js" defer></script>
  </head>

  <body>
  <header class="header" id="inicio">
    <nav class="menu-navegacion">
      <div class="top-left-header">
        <a href="../controllers/post_controller.php">Catálogo</a>
        <a href="../controllers/partners_controller.php">Fundaciones</a>
        <a href="../controllers/new_post_controller.php">Publicar Producto</a>
      </div>

    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="../index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  <h1 class='title'>Planes & Precios</h1>
  <div class="container-sub">

    <section class="inner-container ">
      <h2>Membresia Basica</h2>
      <h4>$5.00 / mes</h4>
      <p><strong>Tendras acceso a realizar publicaciones por el periodo de un mes</strong></p>
      <button id="basic-plan-btn">Suscribirse</button>
    </section>

    <section class="inner-container ">
        <h2>Membresia Pro</h2>
        <h4>$25.00 / año</h4>
        <p><strong>Tendras acceso a realizar publicaciones por el periodo de un año</strong></p>
    
      <button id="pro-plan-btn">Suscribirse</button>
    </section>
    
    <div id="error-message"></div>
  </div>

      <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <h2 class="brand">NewOldLooK</h2>
        <p>Comprometidos con el Planeta</p>
        <span>Contactanos:</span><br>
        <span><i class='bx bx-mail-send'></i> oldnewlook@gmail.com</span><br>
        <span><i class='bx bxl-whatsapp'></i> 311-800-000</span>
      </div>
      <div class="social-media">
        <a href="https://www.facebook.com/" class="social-media-icon">
          <i class="bx bxl-facebook-circle"></i>
        </a>
        <a href="https://www.whatsapp.com/?lang=es" class="social-media-icon">
          <i class="bx bxl-whatsapp"></i>
        </a>
        <a href="https://www.youtube.com/" class="social-media-icon">
          <i class="bx bxl-youtube"></i>
        </a>
        <a href="https://www.instagram.com/" class="social-media-icon">
          <i class="bx bxl-instagram"></i>
        </a>
        <a href="https://www.google.com/intl/es-419/gmail/about/" class="social-media-icon">
          <i class="bx bx-mail-send"></i>
        </a>
      </div>
    </div>
    <div class="line"></div>
  </footer>
    
  </body>
</html>