<!DOCTYPE html>
<html lang="es">
<head>
        <!-- METADATOS -->
        <meta charset="UTF-8">
        <meta name="author" content="grupo-web">
        <meta name="description" content="log-in-randomovie">
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>randoMovie - Log In</title>
        <!-- ICONOS y FONTS -->
        <script src="https://kit.fontawesome.com/594c445afa.js" crossorigin="anonymous"></script>
        <link rel="icon" href="img/suffle icon navegador.svg" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c3fd22b8e3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="formulario">
        <div class="wrapper">
          <div class="form-box login">
                <img src="img/logo3.png">
                <h2>Iniciar Sesión</h2>
                <form action="control.php" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></span>
                        <input type="email" id="email" name="id" required>
                        <label for="id">Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon-2" onclick={handdlerPassword()}><i class="fa-regular fa-eye"></i></span>
                        <input type="password" name="clave" id="txtPassword" required>
                        <label for="clave">Contraseña</label>
                    </div>
                    <div class="recordar-olvidar">
                        <label><input type="checkbox" class="checkbox"> Recuerdáme</label>
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn">Iniciar Sesión</button>
                    <div class="login-registrar">
                        <p>¿No tienes cuenta? <a href="../registro/registro.html" class="registrar-link">Registrarse</a></p>
                    </div>
                </form>
           </div>
        </div>
    </div>

    <?php
        define('ERR_CONN',1); //No se puede conectar a la base de datos
        define('ERR_USUARIO',2); // Usuario o contraseña incorrectos
        define('ERR_NO_IDENTIF',3); //El usuario no se ha identificado

        if(isset($_GET['error'])){
            $error=(int)$_GET['error'];
            switch($error){
                case ERR_CONN:
                    echo '<p class="error">Error: No se ha podido conectar con la base de datos</p>';
                    break;
                case ERR_USUARIO:
                    echo '<p class="error">Error: Identificador o Contraseña incorrectos</p>';
                    break;
                case ERR_NO_IDENTIF:
                    echo '<p class="error">Error: Debe identificarse para acceder al portal</p>';
                    break;
                default:
                    echo '<p class="error">Error desconocido</p>';
                    break;
            }
        }
    ?>
    <!-- JS NATIVO -->
    <script src="js/login.js"></script>  
</body>
</html>