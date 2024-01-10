<?php 
include('seguridad.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="María Victoria Argüelles">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>randoMovie</title>
        <link href="css/usuario_style.css" rel="stylesheet">
        <link href="../media/img/suffle icon navegador.svg" rel="icon" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c3fd22b8e3.js" crossorigin="anonymous"></script>


    </head>
    <body>

        <header>
        </header>

        <div class="video_fondo">
            <video autoplay loop muted src="../media/vid/video_fonfo_default2.mp4"></video>
        </div>

        <main>
            <p id="identity"> ¡Bienvenido,
            <?php
            echo '<strong>'.$_SESSION['name'].'</strong>';
            ?>
            </p>
            <section class="menu_central">
                <img class="logo_randoMovie" src="../media/gif/gif logo_Mesa de trabajo2.gif" alt="gif_logo">
                <a class="random-button" href="videoplayer/videoplayer.php">
                    <img class="random_icon" src="../media/img/suffle icon.svg" alt="random_icon">
                    <span class="button-text">Reproducción aleatoria</span>
                </a>
                <a id="catalogo-link" href="../catalogo/catalogo.php">o elige de nuestro catálogo</a>
            </section>
            <section class="bottom_buttons">
                <a href="#modalFilter">
                    <button class="filter">
                            <i class="fa-solid fa-filter"></i>                    
                    </button>
                </a>
                <a href="#modalUser">
                    <button class="user">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </a>
            </section>

            <a id="modalFilter" class="modal" href="#close" title="close" class="close">
                <div>
                    <h3>Edad</h3>
                    <ul id="edad">
                        <li>TTPP</li>
                        <li>+7</li>
                        <li>+12</li>
                        <li>+16</li>
                        <li>+18</li>
                    </ul>
                    <h3>Géneros</h3>
                    <ul id="generos">
                        <li>Acción</li>
                        <li>Aventura</li>
                        <li>Catástrofe</li>
                        <li>Ciencia ficción</li>
                        <li>Comedia</li>
                        <li>Documentales</li>
                        <li>Drama</li>
                        <li>Fantasía</li>
                        <li>Musicales</li>
                        <li>Suspense</li>
                        <li>Romance</li>
                    </ul>
                    <h3>Duración</h3>
                    <ul id="duracion">
                        <li>30 mins</li>
                        <li>1h</li>
                        <li>1h30</li>
                        <li>2h</li>
                        <li>+2h</li>
                    </ul>
                </div>
            </a>

            <div id="modalUser" class="modal" href="#close" title="close" class="close">
                <div>
                    <h3>Ajustes de Cuenta</h3>
                    <ul id="cuenta">
                        <li><a>Foto de perfil</a></li>
                        <li><a>Nombre de usuario</a></li>
                        <li><a>Cambiar contraseña</a></li>
                        <li><a>Seguridad de la cuenta</a></li>
                    </ul>
                    <a class="logout" href="../index.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        &nbsp Cerrar sesión
                    </a>
                </div>
            </div> 
        </main>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/script.js"></script>

    </body>
</html>