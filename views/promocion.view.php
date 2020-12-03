<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Promociones</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php ROUTE ?>css2/estilos.css" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <header class="header" id="inicio">
    <nav class="menu-navegacion">
      <div class="top-left-header">
        <a href="<?php ROUTE ?>mujer.php">Mujer</a>
        <a href="<?php ROUTE ?>hombre.php">Hombre</a>
        <a href="<?php ROUTE ?>promocion.php">Promociones</a>
        <a href="<?php ROUTE ?>nuevo.php">Publicar Producto</a>

      </div>
      <div class="top-right-header">
        <a href="<?php ROUTE ?>cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
      </div>
    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  <main>
    <section class="contenedor" id="servicios">
      <h2 class="subtitulo">OFERTAS</h2>
      <div class="contenedor-servicio">
        <img src="promciones/SALE.jpg" alt="" />
        <div class="checklist-servicio">
          <div class="service">
            <h3 class="n-service">
              <span class="number">1</span>Ofertas todos los dias
            </h3>
            <p>no te pierdas las ofertas que tenemos para ti</p>
            <br />
            <br />
          </div>
          <div class="service">
            <h3 class="n-service">
              <span class="number">2</span>Conoce todos nuestros estilos
            </h3>
            <p>
              una de las ventajas de reciclar ropa es la gran variedad de
              estilos,diseños y marcas
            </p>
            <br />
            <br />
          </div>
          <div class="service">
            <h3 class="n-service">
              <span class="number">3</span>Se nuestro socio
            </h3>
            <p>
              Forma parte de nuestra comunidad de socios de la tienda y gana
              dinero de manera sostenible
            </p>
            <br />
            <br />
          </div>
        </div>
      </div>
    </section>
    <seccion class="gallery" id="portafolio">
      <div class="contenedor">
        <h2 class="subtitulo">Galeria</h2>
        <div class="contenedor-galeria">
          <img src="<?php ROUTE ?>promciones/artem-beliaikin-49mCO5ZRQDk-unsplash.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>promciones/artificial-photography-vB5qtt8X4NA-unsplash.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>promciones/joshua-rawson-harris-L2kkaayv3YY-unsplash.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>promciones/markus-spiske-5UJbKYUjFCk-unsplash.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>promciones/SALE.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/closetD.jpg" alt="" class="img-galeria" />
        </div>
      </div>
    </seccion>
    <section class="imagen-ligth">
      <img src="<?php ROUTE ?>img/bxs-message-square-x.svg" alt="" class="close" />
      <img src="" alt="" class="agregar-imagen" />
    </section>
    <section class="contenedor" id="expertos">
      <h2 class="subtitulos">te esperamos para:</h2>
      <section class="experts">
        <div class="cont-expert">
          <img src="<?php ROUTE ?>promciones/pot.jpg" alt="" />
          <h3 class="n-expert">descuentos</h3>
        </div>
        <div class="cont-expert">
          <img src="<?php ROUTE ?>promciones/final.jpg" alt="" />
          <h3 class="n-expert">liquidacion</h3>
        </div>
      </section>
    </section>
  </main>
  <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <h2 class="brand">NewOldLooK</h2>
        <p>Comprometidos con el Planeta</p>
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