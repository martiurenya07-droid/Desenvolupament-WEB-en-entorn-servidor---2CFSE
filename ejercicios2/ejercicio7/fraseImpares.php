<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fraseImpares.css">
    <title>fraseImpares</title>
</head>
<body>
    <?php
        //frase de la cual crearemos con los caracteres impares
        $frase = "Hola";

        //creamos funcion saber si es un impar
        function isImpar (int $numero){
            if (($numero%2)==0){
                return false;
            }else{
                return true;
            }
        }

        //funcion para devolver frase de impares
        function devuelveFraseImpares (string $frase){
            $fraseImpar = "";
            for ($i=0; $i < strlen($frase); $i++) { 
                if(isImpar($i)){
                    $fraseImpar.=$frase[$i];
                }
            }
            return $fraseImpar;
        }

        //finalmente mostramos
        $fraseImpar=devuelveFraseImpares($frase);
        echo "<p>Frase original: $frase</p>";
        echo"<p>Frase con caracteres en posicion impar: $fraseImpar</p>";
    ?>
</body>
</html>