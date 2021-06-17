<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../shop.png" />
    <link rel="stylesheet" href="../css2/estilos.css">
    <link rel="stylesheet" href="../css2/registro.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Editar Publicaciones</title>
</head>
<body>

    <div class="header_admin" id="inicio">
        <nav class="menu-admin">
        
            <div>
                <a href="../admin/admin.php"><h2>OldNewLooK</h2></a>
            </div>

            <div class="top-right-header" >
                <a href="../admin/cerrar_admin.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
                <a href="../admin/admin_profile.php"><i class="fas fa-user fa-lg"></i></a>
            </div>

        </nav>
        
    </div>
<div class="container">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo Articulo</h2>
            <form action="../controllers/post_admin_controller.php" enctype="multipart/form-data" class="formulario" method="post">
                <h2 class="subtitulo">Editar Producto</h2>
                <input type="hidden" name="id" value="<?php  echo $resultado->id?>">
                <input type="text" class="form-control" name="titulo" value="<?php echo $resultado->title ?>">
                <textarea id="" class="form-control" cols="30" rows="5" name="descripcion" value=""><?php echo $resultado->description ?></textarea>
                <input type="text" class="form-control" name="precio" value="<?php echo $resultado->price ?>">
                <input type="text" class="form-control" name="cantidad" value="<?php echo $resultado->quantity ?>">
                <select name="categoria" id="" class="form_select" >
                    <option value="1" <?php echo $resultado->category === 'hombre' ? 'selected' : '' ?> >Hombre</option>
                    <option value="2" <?php echo $resultado->category === 'mujer' ? 'selected' : '' ?>>Mujer</option>
                </select>
                <select name="tipo_prod" id="" class="form_select">
                    <option  value="1" <?php echo $resultado->product_type === 'camisa' ? 'selected' : '' ?>>Camisa</option>
                    <option  value="2" <?php echo $resultado->product_type === 'pantalon' ? 'selected' : '' ?>>Pantalon</option>
                    <option  value="3" <?php echo $resultado->product_type === 'zapatos' ? 'selected' : '' ?>>Zapatos</option>
                    <option  value="4" <?php echo $resultado->product_type === 'chaqueta' ? 'selected' : '' ?>>Chaqueta</option>
                </select>
                <input type="text" name="condicion" class="form-control" placeholder="Condicion del Articulo" value="<?php echo $resultado->product_status ?>">
                <img name="thumb" class="img-post" src="<?php echo $resultado->thumb ?>" alt="product_image">
                
                <input type="submit" class="formulario-submit" name="accion" value="guardar"><br>
                <input type="submit" class="formulario-submit" name="accion" value="eliminar">
                
            </form>
        </article>
    </div>
</div>
<footer id="contacto">
    <div class="contenedor footer-content">
        <div class="contact-us">
            <h2 class="brand">OldNewLooK</h2>
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
</body>
</html>
