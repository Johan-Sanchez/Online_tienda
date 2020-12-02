<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header" id="inicio">
        <img src="img/bxs-food-menu.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <a href="mujer.html#mujer">Mujer</a>
            <a href="hombre.html#hombre">Hombre</a>
            <a href="registro.html#registro">Registro</a>
            <a href="promocion.html#promociones">Promociones</a>
            <a name="inicio"></a>
        </nav>
        <div class="contenedor-head">
            <h1 class="titulo">NewOldLooK</h1>
            <p class="copy">Te vez bien salvando el planeta</p>
        </div>
    </header>
 <div class="container"> <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
                    <input type="text" name="nombre" placeholder="Nombre del Articulo">
                    <input type="text" name="precio" placeholder="Precio">
                    <textarea name="condicion" placeholder="Condicion del Articulo" ></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Crear Articulo">
                </form>
            </article>
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
                    <i class='bx bxl-facebook-circle' ></i>
                </a>
                <a href="https://www.whatsapp.com/?lang=es"class="social-media-icon">
                    <i class='bx bxl-whatsapp' ></i>
                </a>
                <a href="https://www.youtube.com/" class="social-media-icon">
                    <i class='bx bxl-youtube' ></i>
                </a>
                <a href="https://www.instagram.com/" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
                <a href="https://www.google.com/intl/es-419/gmail/about/" class="social-media-icon">
                    <i class='bx bx-mail-send' ></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="C:\Users\grasp\Desktop\bootstrap-4.5.0-dist\js\menu.js"></script> 
      
</body>
</html>

