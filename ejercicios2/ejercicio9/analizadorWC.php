<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="analizador.css">
    <title>analizadorWC</title>
</head>
<body>
    <?php
        //frase que usaremos
        $frase = "hola que tal";

        //usamos funcion para saber numero de palabras
        $num_palabras = str_word_count($frase);

        //pasamos a array de palabras con la función nueva
        $array = str_word_count($frase,1);

        //sacamos numero de letras
        $contador = 0;
        for ($i=0; $i < count($array); $i++) { 
            $contador+=strlen($array[$i]);
        }

        //mostramos por pantalla
        echo"<p>Frase original: $frase</p>";
        echo"<br>";
        echo"<p>Numero total letras: $contador</p>";
        echo"<p>Numero total palabras: $num_palabras</p>";
        echo"<br>";

        //sacamos una linea por cada palabra con el número de letras
        for ($i=0; $i < count($array); $i++) { 
            $numeroLetras = strlen($array[$i]);
            echo"<p>La palabra: $array[$i] tiene $numeroLetras letras</p>";
            echo"<br>";
        }
    ?>
</body>
</html>