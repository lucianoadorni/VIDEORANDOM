<?php
//Creamos la conexión con la base de datos para poder añadir 
//el usuario creado en ella
//Pasamos como parámetros el servidor en el que está (para nosotros,
//siempre localhost), el usuario ('root') y la contraseña (vacía)
//que tiene XAMPP para MySQL y el nombre de la base de datos.
//En este caso, nos queremos conectar a la base de datos 'usuarios'.
$mysqli=new mysqli('localhost','root','','usuarios_movie');
//Definimos el charset para las tildes y las eñes
$mysqli->set_charset('utf8');
if ($mysqli->connect_errno) {
    //Si hay error en la conexión (por ejemplo, porque no hemos
    //iniciado MySQL en el XAMPP) almacenaremos esta información
    //en la variable $mensaje
    $mensaje='<div class="regsistrophp"><p class="error" class="regsistrophp">Error con la conexión a la base de datos</p></div>';
}
else {
    //Comprobamos si existe ese identificador de usuario
    //Selecciona el campo identificador de la tabla acceso donde el identificador
    //vale lo que ha escrito el usuario en el input con name='id'
    $querySelect='SELECT identificador FROM acceso WHERE identificador="'.$_POST['id'].'"';

    //Obtención de resultados. Ejecutamos la consulta en la base de datos
    //Los elementos de la tabla acceso que coincidan con la búsqueda, se
    //almacenarán en la variable $result
    $result=$mysqli->query($querySelect);

    //Si hay resultados ya existe el usuario, por lo que el mensaje será de que
    //se defina otro identificador
    if($result->num_rows!=0){
        $mensaje='<div class="regsistrophp"><p>Ya existe un usuario con ese email</p><p><a href="javascript:window.history.back()">Volver atrás</a></p></div>';
    }
    else{
        //Consulta para la introducción de los datos. No tenemos que crear otra query
        //Inserta en la tabla acceso en los campos idAcceso, identificador, clave y nombre
        //los valores null, lo que hay en el input con name='id', lo que hay en el input
        //con name='pass1' y lo que hay en el input con name='name' respectivamente
        //Al idAcceso le damos valor null porque es auto-increment en la base de datos
        $queryInsert='INSERT INTO acceso (id,identificador,clave,nombre) VALUES
        (NULL,"'.$_POST['id'].'","'.$_POST['pass1'].'","'.$_POST['name'].'")';
        //Ejecución de la consulta. Como no estamos buscando información en la base de datos,
        //no obtendremos resultados
        $mysqli->query($queryInsert);
        //Mensaje a presentar al usuario si todo hay ido bien
        $mensaje='<div class="regsistrophp"><p>Usuario creado correctamente<p><a href="../login/login.php">Iniciar sesión</a></p></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>randoMovie - Registro</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Manuale|Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registrophp.css">
</head>

<body>
    <header>
        <h1 id="regsistroh1">Resultado del registro</h1>
    </header>
    <main>
        <!-- Presentamos el mensaje al usuario -->
        <p><?php echo $mensaje; ?></p>
    </main>
</body>

</html>
