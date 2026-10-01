<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>calculadora view</title>
</head>
<body>
    <?php
        echo"<p>Mostramos por pantalla x e y:";
        print_r($get);
        echo"</p>";
        
        //mostramos operaciones por pantalla
        echo"<p>Suma valores: $suma</p>";
        echo"<p>Resta valores: $resta</p>";
        echo"<p>Multiplicación valores: $multiplicacion</p>";
        echo"<p>Division valores: $division</p>";

        //mostramos la variable server
        echo"<p>Mostramos por pantalla la variable server: ";
        print_r($server);
        echo"</p><br>";

        //mostramos ordenador que hace la petición
        echo"<p>Ordenador que realiza la peticion: $peticion</p>";

        //mostramos parametros de la petición
        echo"<p>Parametros de la petición: $parametros</p>";

        //mostramos la ruta
        echo"<p>Ruta servidor locall: $ruta</p>";


    ?>
</body>
</html>