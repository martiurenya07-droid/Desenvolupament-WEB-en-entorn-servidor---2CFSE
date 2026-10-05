<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Index</title>
</head>
<?php 
        if (isset($_COOKIE["nombre"]) && isset($_COOKIE["color"])) {
            //la cookie existe
            $cookies = $_COOKIE;
            $nombre = $cookies["nombre"];
            $color = $cookies["color"];
            echo"<h1>Bienvenido, $nombre</h1>" ;
            echo"<br>";
            echo '<a href="borrar_prefs.php">Borrar preferencias</a>';
        }else{
            $color = "white";
            echo "<h1>Página de inicio</h1>";
            echo '<a href="preferencias.php">Ir a Preferencias</a>';
        }
    ?>
<body style="background-color: <?= $color ?>;">
</body>
</html>