<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coches.css">
    <title>coches</title>
</head>
<body>
    <?php
        //declaramos el array de coches
        $arrayCoches = [];

        //rellenamos el array con los diferentes coches, matriculas etc...
        $arrayCoches["1A"] = ["Ford", "Focus", 5];
        $arrayCoches["1B"] = ["Audi", "A8", 5];
        $arrayCoches["1C"] = ["Seat", "Leon", 5];
        $arrayCoches["1D"] = ["Tesla", "Roadster", 5];

        //ordenamos por matricula los coches
        ksort($arrayCoches);

        //finalmente mostramos por pantalla
        echo"<div>";
        echo"<hr>";
            foreach($arrayCoches as $clave => $valor){
                echo"<p>Matricula: $clave > </p>";
                for ($i=0; $i < count($valor); $i++) {
                    if ($i==0){
                        echo"<p>Marca: $valor[$i]</p>";
                    }else if($i==1){
                        echo"<p>Modelo: $valor[$i]</p>";
                    }else{
                        echo"<p>Número de puertas: $valor[$i]</p>";
                    }
                    
                }
                echo"<br>";
                echo"<hr>";
            }
        echo"</div>";
    ?>
</body>
</html>