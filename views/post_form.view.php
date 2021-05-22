<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROUTE ?>../css2/estilos.css">
    <link rel="stylesheet" href="<?php ROUTE ?>../css2/registro.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
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
                }        
            ?>
            </div>
        </nav>
        <div class="contenedor-head">
            <h1 class="titulo"><a href="../index.php">OldNewLooK</a></h1>
            <p class="copy">Te ves bien salvando el planeta</p>
        </div>
    </header>
    <div class="container">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
                    <h2 class="subtitulo">Publicar Producto</h2>
                    <input type="text" class="form-control" name="titulo" placeholder="Titulo de la publicacion">
                    <textarea id="" class="form-control" cols="30" rows="5" name="descripcion" placeholder="Descripcion del articulo"></textarea>
                    <input type="text" class="form-control" name="precio" placeholder="Precio">
                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad">
                    <input type="text" name="condicion" class="form-control" placeholder="Condicion del Articulo">
                    <input type="file" class="form-control-file" name="thumb">
                    <input type="submit" class="formulario-submit" value="Crear Articulo">
                </form>
                <?php 

                if($file_upload_message) {
                    echo $file_upload_message;
                }
                
                if (isset($result)){
                    if ($result == true){   
                        echo "<script>alert('Tú publicación ha sido creada exitosamente');
                               window.location.href='user_controller.php';
                            </script>";
                    }
                }
                    
                ?>
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
