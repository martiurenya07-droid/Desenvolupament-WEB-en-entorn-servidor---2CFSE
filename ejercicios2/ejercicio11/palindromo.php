<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="palindromo.css">
    <title>palindromo</title>
</head>
<body>
    <?php
    //frase que usaremos
    $frase = "ligar es ser agil";

    //separamos la frase por palabras y la metemos en un array
    $array = str_word_count($frase, 1);

    //metemos en un string toda la frase sin espacios
    $fraseSinEspacios = "";

    for ($i=0; $i < count($array); $i++) { 
        $fraseSinEspacios.=strtolower($array[$i]);
    }
    //giramos la frase y la metemos en un string
    $fraseGirada = "";

    for ($i=strlen($fraseSinEspacios) - 1; $i >= 0; $i--) { 
        $fraseGirada.=$fraseSinEspacios[$i];
    }

    //finalmente comparamos si es igual
    $esPalindroma = false;

    if ($fraseSinEspacios==$fraseGirada){
        $esPalindroma = true;
    }

    //mostramos por pantalla
    echo"<p>Frase: $frase</p>";
    echo"<br>";
    echo"<p>Es palindroma: </p>";

    if ($esPalindroma){
        echo"<p>Si</p>";
    }else{
        echo"<p>No</p>" ;
    }
    ?>

</body>
</html>