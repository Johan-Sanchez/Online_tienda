<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css2/estilos.css">
    <link rel="stylesheet" href="../css2/registro.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
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
                <img name="thumb" style="width: 20rem; height: 10rem;" src="<?php echo $resultado->thumb ?>" alt="product_image">
                <div id="accion" style="display: flex;">
                    <input type="submit" class="formulario-submit" name="accion" value="guardar">
                    <input type="submit" class="formulario-submit" name="accion" value="eliminar">
                </div>
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
