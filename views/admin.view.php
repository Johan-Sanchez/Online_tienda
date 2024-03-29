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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROUTE ?>../css2/mujer.css" />
    <script src="<?php ROUTE ?>js/jquery-3.5.1.js"></script>
    <script src="<?php ROUTE ?>js/bootstrap.min.js"></script>
</head>

<body>
    <header class="header" id="inicio">
        <nav class="menu-navegacion">
           
            <div class="top-right-header" >
                <a href="../cerrar.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
            </div>
        </nav>
        <div class="contenedor-head">
            <h1 class="titulo"><a href="<?php ROUTE ?>index.php">OldNewLooK</a></h1>
            <p class="copy">Te ves bien salvando el planeta</p>
        </div>
    </header>

    <div class="post_admin">
        <h1>Posts</h1>


        <section class="post_admin">



            <table border="1">
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>Title</strong></td>
                    <td><strong>Description</strong></td>
                    <td><strong>Price</strong></td>
                    <td><strong>Editar</strong></td>
                    <td><strong>Eliminar</strong></td>

                </tr>
                <?php foreach ($resultados as $post) : ?>

                    <tr>
                        <td><span><?php echo $post['id'] ?></span><br></td>
                        <td><span><?php echo $post['title'] ?></span><br></td>
                        <td><span><?php echo $post['description'] ?></span><br></td>
                        <td><span><?php echo '$' . $post['price'] ?></span><br></td>
                        <td><input type="submit" name="editar" value="Editar"></td>
                        <td><input type="submit" name="eliminar" value="Eliminar"></td>
                    </tr>
                <?php endforeach; ?>
            </table>







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