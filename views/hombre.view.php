<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>seccion hombre</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php ROUTE ?>css2/mujer.css" />
  <script src="<?php ROUTE ?>js/jquery-3.5.1.js"></script>
  <script src="<?php ROUTE ?>js/bootstrap.min.js"></script>
</head>

<body>
  <header class="header" id="inicio">
    <nav class="menu-navegacion">
      <div class="top-left-header">
        <a href="<?php ROUTE ?>views/mujer.view.php">Mujer</a>
        <a href="<?php ROUTE ?>views/hombre.view.php">Hombre</a>
        <a href="<?php ROUTE ?>promocion.php">Promociones</a>
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
  <a name="mujer"></a>
  <div class="wrap">
    <h1>Sección Hombre</h1>

    <div class="store-mujer">
      <div class="category">
        <a href="#store-mujer" class="category-items" category-all="all">all</a>
        <a href="#store-mujer" class="category-items" category-all="camisas">Camisas</a>
        <a href="#store-mujer" class="category-items" category-all="pantalones">Pantalones</a>
        <a href="#store-mujer" class="category-items" category-all="chaquetas">Chaquetas</a>
        <a href="#store-mujer" class="category-items" category-all="zapatos">zapatos</a>
      </div>
      <section class="lista">
        <div class="products_item" category-all="camisas">
          <img src="<?php ROUTE ?>imagen2/camisa.jpg" alt="" />
          <a href="#">Camisas casual</a>
        </div>
        <div class="products_item" category-all="camisas">
          <img src="<?php ROUTE ?>imagen2\camisac.jpg" alt="" />
          <a href="#">Camisas manga corta </a>
        </div>
        <div class="products_item" category-all="camisas">
          <img src="<?php ROUTE ?>imagen2\camisaco.jpg" alt="" />
          <a href="#">Camisas manga corta</a>
        </div>
        <div class="products_item" category-all="pantalones">
          <img src="<?php ROUTE ?>imagen2\pantalon.jpg" alt="" />
          <a href="#">Pantalones casual</a>
        </div>
        <div class="products_item" category-all="pantalones">
          <img src="<?php ROUTE ?>imagen2\pantalon2.jpg" alt="" />
          <a href="#">Pantalones jeans</a>
        </div>
        <div class="products_item" category-all="chaquetas">
          <img src="<?php ROUTE ?>imagen2\chaqueta.jpg" alt="" />
          <a href="#">Chaquetas azul</a>
        </div>
        <div class="products_item" category-all="chaquetas">
          <img src="<?php ROUTE ?>imagen2\chaqueta2.jpg" alt="" />
          <a href="#">Chaquetas levi´s</a>
        </div>
        <div class="products_item" category-all="zapatos">
          <img src="<?php ROUTE ?>imagen2\zapatosh.jpg" alt="" />
          <a href="#">Zapatos cafes</a>
        </div>
        <div class="products_item" category-all="zapatos">
          <img src="<?php ROUTE ?>imagen2\zapatosh2.jpg" alt="" />
          <a href="#">Zapatos azules</a>
        </div>
      </section>
    </div>
  </div>
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