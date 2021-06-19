<?php require_once('../admin/config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css2/registro.css" />
    <link rel="stylesheet" href="../css2/estilos.css">
    <link rel="stylesheet" href="../css2/mujer.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- Load Stripe.js on your website. -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./success.js" defer></script>
  </head>

  <body>
    <div class="container-payment">
      
      <div class="">
          <h1>Tu Subscripción Fue Realizada Exitosamente</h1>
          <h4>Datos Subscripción</h4>
      </div>
      <div class="">

        </div>
      </div>

    </div>

    <form action="../controllers/user_subscription_controller.php" id="formulario" method="post" class="form-payment">
        <input type="text" id="stripeSub" name="subs">
        <input type="text" id="payment-status" name="payment_status">
        <input type="submit" value="Continuar" id="btn-sub" class="payment-submit">
    </form>
    
    
    <!-- Footer-->
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
    <!-- End-Footer-->
  </body>
</html>
