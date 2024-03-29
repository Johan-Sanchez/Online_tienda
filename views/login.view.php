<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../css2/registro.css" />
  <link rel="stylesheet" href="../css2/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Formulario de Login-->
  <div class="formulario">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form1" method="POST">

      <h2 class="subtitulo">Login</h2>

      <div class="form-group has-feedback">
        <label for="" class="formulario-label">Direccion de correo electronico: </label>
        <i class="fas fa-envelope form-control-feedback"></i>
        <input type="text" name="correo" class="form-control" id="user-name" placeholder="" required />
      </div>

      <div class="form-pswd-container">
        <label for="" class="formulario-label">Contraseña:</label>
        <a href="#">¿Olvidaste tu contraseña?</a>
      </div>
      <div class="form-group has-feedback">
        <i class="fas fa-lock form-control-feedback"></i>
        <input type="password" name="password" class="form-control" required />
      </div>
      <input type="submit" value="Enviar" class="formulario-submit" />

      <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
      <?php if (!empty($errores)) : ?>
        <div class="error">

          <ul>
            <?php echo $errores; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div id="aviso-legal">
        <p>
          Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y
          el <a href="#">Aviso de Privacidad</a>
        </p>

      </div>
    </form>

    <p><strong>¿Eres nuevo?</strong></p>
    <a href="../controllers/register_controller.php"><input type="submit" class="formulario-submit" value="Crear una cuenta" /></a>

  </div>




  <!-- Footer-->
  <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <h2 class="brand">NewOldLooK</h2>
        <p>Comprometidos con el Planeta</p>
        <a href="<?php ROUTE ?>index.php">Inicio</a>
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
  <script src="<?php ROUTE ?>js/form.js"></script>
</body>

</html>