<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comprueba_hora.css">
    <title>comprueba_hora</title>
</head>
<body>
    <?php
        //declaramos variable hora
        $hora = "21:30:12";

        //separamos por partes y lo metemos en un array
        $partes = explode(":", $hora);

        //comprobamos que esta hora sea válida
        $es_valida = "no";
        if (($partes[0]>=0&&$partes[0]<=23) && ($partes[1]>=0&&$partes[1]<=59) && ($partes[2]>=0&&$partes[2]<=59)) $es_valida = "si";


        //mostramos por pantalla
        echo"<p>La hora es válida: $es_valida</p>";

    ?>
</body>
</html>