<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="../shop.png" />
  <title>Publicaciones</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!-- JS, Popper.js, and jQuery -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../css2/mujer.css" />
  <link rel="stylesheet" href="../css2/estilos.css" />
  <script src="../filtering.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

        if (!isset($_SESSION['subscription_id']) && !isset($_SESSION['subscription_status'])) {
          echo '<a href="../payment/index.php">Subscribete</a>';
        }

        if (isset($_SESSION['usuario'])) {
          echo '<a href="../cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>';
          echo '<a href="../controllers/user_profile_controller.php"><i class="fas fa-user fa-lg"></i></a>';
        } else {
          echo '<a href="../controllers/user_controller.php">
                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesion</a>';
        }
        ?>
      </div>
    </nav>
    <div class="contenedor-head">
      <h1 class="titulo"><a href="../index.php">OldNewLooK</a></h1>
      <p class="copy">Te ves bien salvando el planeta</p>
    </div>
  </header>
  <a name="mujer"></a>
  <div class="wrap">
    <h1>Publicaciones</h1>

    <div class="store-mujer">
      <div class="category">
        <h2 class="category-title"> Filtrar por: </h2>
        <a href="#" onclick="return filtering(this)" value="all" class="category-items">All</a>
        <a href="#" onclick="return filtering(this)" value="hombre" class="category-items">Hombre</a>
        <a href="#" onclick="return filtering(this)" value="mujer" class="category-items">Mujer</a>
        <a href="#" onclick="return filtering(this)" value="niña" class="category-items">Niña</a>
        <a href="#" onclick="return filtering(this)" value="camisa" class="category-items">Camisas</a>
        <a href="#" onclick="return filtering(this)" value="pantalon" class="category-items">Pantalones</a>
        <a href="#" onclick="return filtering(this)" value="chaqueta" class="category-items">Chaquetas</a>
        <a href="#" onclick="return filtering(this)" value="zapatos" class="category-items">Zapatos</a>
        <a href="#" onclick="return filtering(this)" value="bermudas" class="category-items">Bermudas</a>
        <a href="#" onclick="return filtering(this)" value="blue-jean" class="category-items">Blue-Jean</a>
        <a href="#" onclick="return filtering(this)" value="sandalias" class="category-items">Sandalias</a>
        <a href="#" onclick="return filtering(this)" value="gorras" class="category-items">Gorras</a>
      </div>

      <section class="lista">

        <?php foreach ($resultados as $post) : ?>
          <div class="products_item" category-all="pantalones">

            <div class="izquierda">
              <img src="<?php echo $post['thumb'] ?>" alt="" />
            </div>

            <div class="derecha">
              <h2><?php echo $post['title'] ?><?php echo $category ?></h2>
              <span><?php echo $post['description'] ?></span><br>

              <span><?php echo '$' . $post['price'] ?></span><br>

              <form action="../controllers/product_detail_controller.php" id="form1" method="POST">
                <input type="hidden" value=<?php echo $post['id']  ?> name="id">
                <input type="submit" class="formulario-submit" name="" value="Detalle">
              </form>
            </div>
          </div>

        <?php endforeach; ?>


        <div class="pagination">
          <ul>
            <?php

            if (current_page() === 1) {
              echo '<li class="disabled">&laquo;</li>';
            } else {

              echo '<li>';
              echo "<a href='controllers/post_controller.php?p=" . current_page() - 1 . "'>&laquo;</a>";
              echo '</li>';
            }

            for ($i = 1; $i <= $number_pages; $i++) {
              if (current_page() === $i) {
                echo '<li class="active">' . $i . '</li>';
              } else {
                echo '<li>';
                echo "<a href='controllers/post_controller.php?p=" . $i . "'>" . $i . "</a>";
                echo '</li>';
              }
            }

            if (current_page() !== $number_pages) {
              
              echo '<li class="disabled">&raquo;</li>';
            } else {
              echo '<li>';
              echo "<a href='controllers/post_controller.php?p=" . current_page() + 1 . "'>&raquo;</a>";
              echo '</li>';
            }
            ?>
          </ul>
        </div>
      </section>

    </div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>