<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,900&display=swap" rel="stylesheet" />
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php ROUTE ?>css2/estilos.css" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <header class="header" id="inicio">
    <nav class="menu-navegacion">
      <div class="top-left-header">
        <a href="mujer.html#mujer">Mujer</a>
        <a href="hombre.html#hombre">Hombre</a>
        <a href="promocion.html#promociones">Promociones</a>
        <a href="<?php ROUTE ?>nuevo.php">Publicar Producto</a>
      </div>
      <div class="top-right-header">
        <a href="<?php ROUTE ?>cerrar.php">Cerrar Sesion</a>
      </div>
    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="<?php ROUTE ?>index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  <main>
    <section class="contenedor" id="servicios">
      <h2 class="subtitulo">Nuestro servicio</h2>
      <div class="contenedor-servicio">
        <img src="<?php ROUTE ?>img/closetC.jpg" alt="" />
        <div class="checklist-servicio">
          <div class="service">
            <h3 class="n-service">
              <span class="number">1</span>Reciclaje de ropa
            </h3>
            <p>
              a la hora de adquirir ropa, el mercado tradicional nos ha
              querido inculcar la formula del usar y tirar. Es decir, muchas
              veces nos deshacemos de las prendas de forma prematura y, casi
              de inmediato,acudimos a las tiendas y a los centros comerciales
              con el objetivo de reemplazarlas por otras.
            </p>
            <br />
            <br />
            <p>
              sin embargo, la gran mayoria de las personas desconoce los
              numerosos beneficios que supone dar una segunda oportunidad a
              quellas prendas que se conservan en buen estado.
            </p>
          </div>
          <div class="service">
            <h3 class="n-service">
              <span class="number">2</span>Venta de ropa
            </h3>
            <p>
              la venta de ropa usada es una gran oportunidad para todos, ganar
              dinero de forma rapida y sostenible. vendiendo tu ropa usada
              ayudamos al planeta y a tu bolsillo.
            </p>
            <br />
            <br />
          </div>
          <div class="service">
            <h3 class="n-service">
              <span class="number">3</span>Compra en nuestra tienda
            </h3>
            <p>
              si compras ropa usada igual estas aportando a la solucion.
              Tambien contamos con una gran variedad de diseños y estilos a un
              muy bajo costo.
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
          <img src="<?php ROUTE ?>img/mujer.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/closetA.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/closetB.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/men (1).jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/closetC.jpg" alt="" class="img-galeria" />
          <img src="<?php ROUTE ?>img/closetD.jpg" alt="" class="img-galeria" />
        </div>
      </div>
    </seccion>
    <section class="imagen-ligth">
      <img src="<?php ROUTE ?>img/bxs-message-square-x.svg" alt="" class="close" />
      <img src="" alt="" class="agregar-imagen" />
    </section>
    <section class="contenedor" id="expertos">
      <h2 class="subtitulos">expertos en:</h2>
      <section class="experts">
        <div class="cont-expert">
          <img src="<?php ROUTE ?>img/verde.jpg" alt="" />
          <h3 class="n-expert">Reciclaje</h3>
        </div>
        <div class="cont-expert">
          <img src="<?php ROUTE ?>img/moda.jpg" alt="" />
          <h3 class="n-expert">Moda</h3>
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
  <script src="<?php ROUTE ?>js/menu.js"></script>
</body>

</html>