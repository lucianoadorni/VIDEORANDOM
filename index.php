<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Álvaro de la Cruz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>randoMovie</title>
    <link href="index.css" rel="stylesheet">
    <link href="media/img/suffle icon navegador.svg" rel="icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3fd22b8e3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="video_fondo">
        <video autoplay loop muted src="media/vid/video_fonfo_default2.mp4"></video>
    </div>
    <main>
        <section class="menu_central">
            <img class="logo_randoMovie" src="media/gif/gif logo_Mesa de trabajo2.gif" alt="gif_logo">
            <a class="random-button" href="videoplayer/videoplayer.php">
                <img class="random_icon" src="media/img/suffle icon.svg" alt="random_icon">
                <span class="button-text">Reproducción aleatoria</span>
            </a>
        </section>
        <section class="inicio_registro">
            <a class="inicio_sesion" class="button-text" href="login/login.php">Iniciar sesión</a>
            <a class="registro" class="button-text" href="registro/registro.html">Crear cuenta</a>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>