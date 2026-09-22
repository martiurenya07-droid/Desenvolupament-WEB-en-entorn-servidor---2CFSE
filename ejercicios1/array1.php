<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array1.css">
    <title>array1</title>
</head>
<body>
    <?php
        //declaramos el array vacio para después meterle números
        $array = [];

        //bucle (for) que ira metiendo números
        for ($i=0; $i < 50;) {
            $numero = rand(0, 99);

            //comprobamos si es un número repetido
            if(!in_array($numero, $array)){
                $array[$i] = $numero;
                $i++;
            }
        }

        //ordenamos array
        sort($array);

        //sacamos número mayor
        $numeroMayor=max($array);

        //sacamos número menor
        $numeroMenor=min($array);

        //calculamos la media
        $media = array_sum($array) / count($array);
    ?>

    
        <?php
            echo"<ul>";
            foreach ($array as $numero){
                echo"<li>$numero</li>";
            }
            echo"</ul>";
        ?>
    

    <br>

    <div>
        <p>El número mayor del array es: <?= $numeroMayor ?></p>
        <p>El número menor del array es: <?= $numeroMenor ?></p>
        <p>La media del array es: <?= number_format($media, 2) ?></p>
    </div>
</body>

</html>