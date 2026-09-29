<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="analizador.css">
    <title>analizador</title>
</head>
<body>
    <?php 
        //declaramos y inicializamos frase que usaremos (separada por espacios)
        $frase = "hola que tal";

        //separamos frase porque esta dividida en espacios
        $array = explode(" ", $frase);

        //sacamos numero total de palabras
        $num_palabras = count($array);

        //sacamos numero total de letras
        $contador = 0;
        for ($i=0; $i < $num_palabras; $i++) { 
            $contador+=strlen($array[$i]);
        }

        //mostramos por pantalla esta información
        echo"<p>Frase original: $frase</p>";
        echo"<br>";
        echo"<p>Numero total letras: $contador</p>";
        echo"<p>Numero total palabras: $num_palabras</p>";
        echo"<br>";

        //mostramos por pantalla cada palabra su tamaño
        for ($i=0; $i < $num_palabras; $i++) { 
            $numeroLetras = strlen($array[$i]);
            echo"<p>La palabra: $array[$i] tiene $numeroLetras letras</p>";
            echo"<br>";
        }
    ?>
</body>
</html>