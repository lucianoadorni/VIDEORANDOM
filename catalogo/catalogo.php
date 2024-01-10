<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">

    <link rel="shortcut icon" href="media/icon.svg" type="image/x-icon">
    <title>randoMovie - Catalogo</title>
</head>
<body>
    <img id="logo" src="media/logo.png" alt="randoMovie">

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
        <button class="random-button">
            <img class="random_icon" src="media/icon-white.svg" alt="random_icon">
            <span class="button-text">Reproducción aleatoria</span>
        </button>
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

    <section class="recomendados">
        <h2>Elegidos a base de tus favoritos</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="media/posters/poster1.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster2.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster3.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster4.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster5.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster6.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster7.jpg"></a></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section class="recomendados">
        <h2>El terror en tú casa</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="media/posters/poster6.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster2.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster4.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster10.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster8.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster9.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster1.jpg"></a></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section class="recomendados">
        <h2>Tus peliculas de navidad tambien te extrañan</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="media/posters/poster8.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster9.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster10.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster4.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster5.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster6.jpg"></a></div>
                <div class="swiper-slide"><a href=""><img src="media/posters/poster7.jpg"></a></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="javascript/scripts.js"></script>
</body>
</html>