<?php require 'admin/config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROUTE ?>css2/estilos.css">
    <link rel="stylesheet" href="<?php ROUTE ?>css2/registro.css">
    <link rel="stylesheet" href="<?php ROUTE ?>css2/error.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header" id="inicio">
        <nav class="menu-navegacion">
            <div class="top-left-header">
                <a href="<?php ROUTE ?>views/mujer.view.php">Mujer</a>
                <a href="<?php ROUTE ?>views/post.view.php">Hombre</a>
                <a href="<?php ROUTE ?>promocion.php">Promociones</a>
                <a href="<?php ROUTE ?>nuevo.php">Publicar Producto</a>

            </div>
            <div class="top-right-header">
                <a href="<?php ROUTE ?>cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
            </div>
        </nav>
        <div class="contenedor-head">
            <h1 class="titulo"><a href="<?php ROUTE ?>index.php">OldNewLooK</a></h1>
            <p class="copy">Te ves bien salvando el planeta</p>
        </div>
    </header>


    <main class="error">

        <div>
            <h1>404</h1>
            <h2>UH OH! You're lost.</h2>
            <p>The page you are looking for does not exist.
                How you got here is a mystery. But you can click the button below
                to go back to the homepage.
            </p>
            <a href="<?php ROUTE ?>index.php" class="btn">HOME</a>
        </div>
        
    </main>

    <!--Footer-->
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">NewOldLooK</h2>
                <p>Comprometidos con el Planeta</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/" class="social-media-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="https://www.whatsapp.com/?lang=es" class="social-media-icon">
                    <i class='bx bxl-whatsapp'></i>
                </a>
                <a href="https://www.youtube.com/" class="social-media-icon">
                    <i class='bx bxl-youtube'></i>
                </a>
                <a href="https://www.instagram.com/" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.google.com/intl/es-419/gmail/about/" class="social-media-icon">
                    <i class='bx bx-mail-send'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="<?php ROUTE ?>js\menu.js"></script>

</body>

</html>