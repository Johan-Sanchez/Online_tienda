<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detalle Publicación</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../css2/mujer.css" />
  <script src="js/jquery-3.5.1.js"></script>

</head>

<body>

  <header class="header" id="inicio">
    <nav class="menu-navegacion">
      <div class="top-left-header">
        <a href="../controllers/post_controller.php">Catálogo</a>
        <a href="../controllers/partners_controller.php">Fundaciones</a>
        <a href="../controllers/new_post_controller.php">Publicar Producto</a>
      </div>
      <div class="top-right-header">
        <?php
        if (isset($_SESSION['usuario'])) {
          echo  '<a href="../cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>';
        }
        ?>
      </div>
    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="../index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  
  <div class="wrap">
    <h1>Detalle Publicación</h1>

    <div>

      <section class="lista_detail">

        <div class="products_item_detail_left">

          <div class="">
            <img src="<?php echo $resultado->thumb ?>" alt="" style="width: 300px; height: 300px;"/>
          </div>
        </div>

        <div class="products_item_detail_right">

          <div class="inner_right">
            <ul>
              <li>
                <h3><?php echo ucwords($resultado->title) ?></h3>
              </li>
              <li><strong> $<?php echo $resultado->price ?></strong></li>
              <li><strong>Cantidad: </strong><?php echo $resultado->quantity ?></li>
              <li><strong>Descripción:</strong> <?php echo $resultado->description ?></li>
            </ul>
          </div>
          <div class="inner_right">
            <h4>Información De Contacto</h4>
            <ul>
              <li><?php echo $resultado->name . " " . $resultado->last_name ?></li>
              <li><strong>Email: </strong><?php echo $resultado->user_email ?></li>
              <li><strong>Celular: </strong><?php echo $resultado->phone ?></li>
            </ul>
          </div>

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

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
</body>

</html>
