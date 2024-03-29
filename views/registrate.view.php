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
  <link rel="stylesheet" href="../css2/registro.css" />
  <link rel="stylesheet" href="../css2/mujer.css" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

  <!-- Formulario Registrate-->
  <div class="formulario">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form1" method="POST">

      <h2 class="subtitulo">Registro</h2>

      <label for="" class="formulario-label">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" required />
      <label for="" class="formulario-label">Apellido:</label>
      <input type="text" name="apellido" class="form-control" id="nombre" required />

      <label for="" class="formulario-label">Sexo:</label>
      <input type="radio" id="male" name="genero" value="m">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="genero" value="f">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="genero" value="o">
      <label for="other">Other</label>

      <label for="" class="formulario-label">Correo electronico:</label>
      <input type="text" name="correo" class="form-control" required />

      <label for="" class="formulario-label">Nombre de Usuario</label>
      <input type="text" name="nick_name" class="form-control" required />

      <label for="" class="formulario-label">Numero de Celular</label>
      <input type="text" name="phone" class="form-control" required />

      <label for="" class="formulario-label">Contraseña:</label>
      <input type="password" name="password" class="form-control" required />

      <label for="" class="formulario-label">Repite la contraseña:</label>
      <input type="password" name="password2" class="form-control" required />

      <input type="submit" value="Enviar" class="formulario-submit" />

      <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
      <?php if (!empty($errores)) : ?>
        <div>
          <ul>
            <li><?php echo $errores; ?></li>
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

    <p><strong>Ya tienes cuenta</strong></p>
    <a href="../controllers/user_controller.php"><input type="submit" class="formulario-submit" value="Iniciar sesion" /></a>
  </div>

  <!-- Footer -->
  <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <h2 class="brand">NewOldLooK</h2>
        <p>Comprometidos con el Planeta</p>
        <a href="index.html">Inicio</a>
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
  <script src="<?php echo $ROUTE ?>js/form.js"></script>
</body>

</html>
