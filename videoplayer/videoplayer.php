<?php
// Establish a connection to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usuarios_movie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to select a random row from the "random_video" table
    $sql = "SELECT * FROM random_video ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the random row
        while ($row = $result->fetch_assoc()) {
            $randomLink = $row["link"];
            $nombre = $row["name"];
            $informacion = $row["info"];
            $argumento = $row["argumento"];
            $personajes = $row["personajes"];
            // Redirect to the randomly selected link
        }
    } else {
        echo "No records found in the 'random_video' table";
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reproductor de la web</title>
    <link href="media/img/suffle icon navegador.svg" rel="icon" type="image/x-icon">
    

    <!-- Links de los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
    <div class="container show-controls">
        <div class="wrapper">
            <div class="video-timeline">
                <div class="progress-area">
                    <span>00:00</span>
                    <div class="progress-bar"></div>
                </div>
            </div>

            <!-- Controles del vídeo -->

            <p id="name"><?php echo $nombre ?></p>

            <ul class="video-controls">
                <li class="options left">
                    <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                    <input type="range" min="0" max="1" step="any">
                    <div class="video-timer">
                        <p class="current-time">00:00</p>
                        <p class="separator"> / </p>
                        <p class="video-duration">00:00</p>
                    </div>
                </li>
                <li class="options center">
                    <button class="skip-backward"><i class="fas fa-backward"></i></button>
                    <button class="play-pause"><i class="fas fa-play"></i></button>
                    <button class="skip-forward"><i class="fas fa-forward"></i></button>
                </li>
                <li class="options right">
                    <button class="go-back"><a href="../catalogo/catalogo.php"><i class="fa-solid fa-arrow-left"></i></a></button>
                    <div class="playback-content">
                        <button class="playback-speed"><span class="material-symbols-rounded">slow_motion_video</span></button>
                        <ul class="speed-options">
                            <li data-speed="2">2x</li>
                            <li data-speed="1.5">1.5x</li>
                            <li data-speed="1" class="active">Normal</li>
                            <li data-speed="0.75">0.75x</li>
                            <li data-speed="0.5">0.5x</li>
                        </ul>
                    </div>
                    <a class="shuffle" href="videoplayer.php"><i class="fa-solid fa-shuffle"></i></a>
                    <a class="info" href="#target-content"><i class="fa-solid fa-info"></i></a>
                    <div id="target-content">
                        <a href="#" class="close"><i class="fa-solid fa-x"></i></a>
                        <div class="target-inner">
                            <h2>INFORMACIÓN</h2>
                            <p><?php echo $informacion ?></p>
                            
                            <h2>ARGUMENTO</h2>
                            <p><?php echo $argumento ?></p>
                            
                            <h2>PERSONAJES PRINCIPALES</h2>
                            <p><?php echo $personajes ?></p>
                        </div>
                    </div>
                    <button class="fullscreen"><i class="fa-solid fa-expand"></i></button>
                </li>
            </ul>
        </div>
        <video src="media/vid/<?php echo $randomLink ?>"></video>
    </div>

    <script src="script.js"></script>

</body>



</html>
