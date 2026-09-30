<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cani.css">
    <title>cani</title>
</head>
<body>
    <?php 
        //frase que usaremos
        $frase = "hola que tal";
        
        //la separamos por palabras y la metemos en un array
        $array = str_word_count($frase,1);

        //creamos funcion saber si es impar
        function isImpar (int $numero){
            //es par
            if ($numero%2==0) return false;

            //es impar
            return true;
        }
        //creamos frase al estilo cani
        $fraseCani = "";
        for ($i=0; $i < count($array); $i++) { 
            for ($j=0; $j < strlen($array[$i]); $j++) { 
                if (isImpar($j)){
                    $fraseCani.=strtoupper($array[$i][$j]);
                }else{
                    $fraseCani.=strtolower($array[$i][$j]);
                }
            }

            //añadimos espacio por cada palabra
            $fraseCani.=" ";
        }

        //finalmente mostramos por pantalla
        echo"<p>Frase original: $frase</p>";
        echo"<br>";
        echo"<p>Frase al estilo cani: $fraseCani</p>";
    ?>
</body>
</html>