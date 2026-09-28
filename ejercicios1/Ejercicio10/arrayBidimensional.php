<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="arrayBidimensional.css">
    <title>arrayBidimensional</title>
</head>
<body>
    <?php
        //declaramos array
        $arrayBi = [];

        //rellenamos este array
        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 9; $j++) { 
                //generamos número aleatorio
                $numeroAleatorio = rand(100,999);
                
                //variable comprobación
                $repetido = false;

                //recorremos para comprobar si ya existe
                foreach ($arrayBi as $valor){
                    if (in_array($numeroAleatorio, $valor)){
                        $repetido = true;
                    }
                }

                //metemos al array o no depende si esta repetido
                if(!$repetido){
                    $arrayBi[$i][$j] = $numeroAleatorio;
                }else{
                    $j--;
                }
            }
        }

        //sacamos número max
        $arrayMax = [];
        for ($i=0; $i < count($arrayBi); $i++) { 
            $arrayMax[$i] = max($arrayBi[$i]);
        }

        $max = max($arrayMax);

        //sacamos numero min
        $arrayMin = [];
        for ($i=0; $i < count($arrayBi); $i++) { 
            $arrayMin[$i] = min($arrayBi[$i]);
        }

        $min = min($arrayMin);

        //descubrimos fila minimo y maximo
        $colMax = 0;
        $filaMin = 0;

        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 9; $j++) { 
                if ($arrayBi[$i][$j]==$max){
                    $colMax = $j;
                }
            }
        }

        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 9; $j++) { 
                if ($arrayBi[$i][$j]==$min){
                    $filaMin = $i;
                }
            }
        }

        //finalmente mostramos por pantalla
        echo"<table>";
        for ($i=0; $i < 6; $i++) {
            echo"<tr>";
            for ($j=0; $j < 9; $j++) {
                if ($j == $colMax){
                    echo"<td id='azul' >";
                    echo$arrayBi[$i][$j];
                    echo"</td>";
                }else if ($i == $filaMin){
                    echo"<td id='verde'>";
                    echo$arrayBi[$i][$j];
                    echo"</td>";
                }else{
                    echo"<td id='negro'>";
                    echo$arrayBi[$i][$j];
                    echo"</td>";
                }
            }
            echo"</tr>";
        }
        echo"</table>";

    ?>
</body>
</html>