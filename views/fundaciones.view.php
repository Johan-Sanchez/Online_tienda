<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fundaciones</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="<?php ROUTE ?>js/jquery-3.5.1.js"></script>
  <script src="<?php ROUTE ?>js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css2/mujer.css" />
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
            if (isset($_SESSION['usuario'])){
            echo  '<a href="../cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>';
            }else{
              echo  '<a href="../controllers/user_controller.php"><i class="fas fa-sign-in-alt"></i>Iniciar Sesion</a>';
            }        
        ?>
      </div>
    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="../index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  
 

  <div class="fundaciones-section fundaciones-include">
      <h2>APOYA A FUNDACIONES</h2>
      <h3>La comunidad OldNewLooK impulsa el apoyado a estas grandes causas y muchas más.</h3>

    <div class="fundaciones-grid">
      <a href="https://www.minutodedios.org/" target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="https://www.minutodedios.org/images/logo-cmd-ho-transparente.png" alt="Games Aid">
          </div>
        </div>
      </a>
      <a href="https://www.fundacioncompasion.org/" target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="https://www.fundacioncompasion.org/wp-content/uploads/2016/05/cropped-logo.png" alt="Make A Wish">
          </div>
        </div>
      </a>
      <a href="http://www.fundacionlasgolondrinas.org/" target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="https://static.wixstatic.com/media/c7904e_6b3cb96ce8804ef5a6f85acac8d59564~mv2.png/v1/fill/w_232,h_160,al_c,q_85,usm_0.66_1.00_0.01/FLG.webp" alt="Red Cross">
          </div>
        </div>
      </a> 
      <a href="https://fundacionformemos.org/es" target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="https://fundacionformemos.org/images/logo.png" alt="Red Cross">
          </div>
        </div>
      </a>
      <a href="https://vivirenelpoblado.com/re-coleccion-recoleccion-de-ropa-usada-en-viva-envigado/"  target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="https://vivirenelpoblado.com/wp-content/uploads/2019/07/logo-vertica-250.png" style="background-color: grey;" alt="Red Cross">
          </div>
        </div>
      </a>
      <a href="http://www.casademariayelnino.org"  target="_blank" rel="nofollow">
        <div class="fundaciones-item">
          <div class="fundaciones-image-wrapper">
            <img src="http://www.casademariayelnino.org/themes/ccmn/images/logoUp.png" alt="Red Cross">
          </div>
        </div>
      </a>
    </div>
  </div>

  

  <!--Footer -->
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>