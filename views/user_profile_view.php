<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../shop.png" />
    <title>Perfil Usuario</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- JS, Popper.js, and jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css2/mujer.css" />
    <link rel="stylesheet" href="../css2/registro.css" />
    <script src="../payment/cancel.js"></script>
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

    <div class="wrap">
        <h1>Configuracion de cuenta</h1>

        <form id="btn-cointainer" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <section class="lista_detail">

                <div id="profile-img-container" class="products_item_detail_left">

                    <div class="">
                        <img src="../img/profile.jpg"  alt="" class="img-profile"/><br>
                        <!--<input type="file" ></input> -->
                    </div>
                </div>

                <div class="products_item_detail_right">

                    <div class="inner_right">
                        <ul>
                            <li class="info-section">
                                <h3><?php echo ucwords($resultado->name) ?></h3>
                            </li>
                            <li class="info-section">
                                <strong>Correo: </strong>
                                <input type="text" class="usr-data" name="email" value="<?php echo $resultado->email ?>" ></input>
                                <span class="edit-btn" onclick="editField(event)"><i class="fas fa-edit"></i>Editar</span>
                            </li>
                            <li class="info-section">
                                <strong>Nombre de Usuario: </strong>
                                <input type="text" class="usr-data" name="nick_name" value="<?php echo $resultado->nick_name ?>" ></input>
                            </li>
                            <li class="info-section">
                                <strong>Telefono:</strong>
                                <input  type="text" class="usr-data" name="phone" value="<?php echo $resultado->phone ?>"></input>
                            </li>

                            <button class="profile-submit">Actualizar</button>
                            <input type="hidden" id="subscription-status" name="subscription-status">
                        </ul>
                    </div>
                    <div class="inner_right">
                        <h4>Información De Suscripcion</h4>

                        <ul>
                            <li>
                                <strong>Estado: </strong>
                                <span id="sub-status-msg"><?php echo $resultado->status === 'paid' ? 'activa' : 'inactivo' ?> </span>
                            </li>
                            <li>
                                <button id="cancel-plan-btn" class="profile-submit" style="font-size: 1rem">Cancelar Subscripción</button>                        
                            </li>
                        </ul>
                        <div id="error-message"></div>
                    </div>
                </div>

            </section>
        </form>

    </div>

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

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
</body>

</html>