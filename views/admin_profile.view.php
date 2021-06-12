<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil Administrador</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- JS, Popper.js, and jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css2/mujer.css" />
    <link rel="stylesheet" href="../css2/registro.css" />
    <script src="js/jquery-3.5.1.js"></script>

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
                                <input type="text" class="usr-data" name="user_name" value="<?php echo $resultado->user_name ?>" ></input>
                            </li>
                            <li class="info-section">
                                <strong>Telefono:</strong>
                                <input  type="text" class="usr-data" name="phone" value="<?php echo $resultado->phone ?>"></input>
                            </li>
                        </ul>
                    </div>
                    <div class="inner_right">
                        <h4>Modificar Contraseña</h4>

                        <ul>
                            <li id="admin-data" >
                                <strong>Nueva Contraseña:</strong>
                                <input  type="password"  name="new_password"></input><br>
                                <strong>Confirmar Contraseña:</strong>
                                <input  type="password"  name="confirm_password"></input><br>                       
                            </li>
                            <button id="change"  class="profile-submit" style="font-size: 1rem">Modificar</button> 
                            <button class="profile-submit">Actualizar</button>
                        </ul>
                        <div id="error-message"></div>
                    </div>
                </div>
                <?php 
                    if (!empty($errores)) { 
                        echo  "<script>alert('$errores'); </script>"; 
                    }
                ?>
                  
        
                
            </section>
        </form>

    </div>

<!-- Footer-->
<footer id="contacto">
    <div class="contenedor footer-content">
        <div class="contact-us">
            <h2 class="brand">OldNewLooK</h2>
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
<script src="script_admin.js"></script>
</body>

</html>