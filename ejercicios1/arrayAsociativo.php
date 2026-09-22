<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrayAsociativo</title>
</head>
<body>
    <?php
        //declaración array
        $array = [];

        //lógica rellenar array con M o F
        for ($i=0; $i < 100; $i++) { 
            $numAleatorio = rand(0,1);

            if ($numAleatorio==0){
                $array[$i]="M";
            }else{
                $array[$i]="F";
            }
        }

        //contamos cuantos elementos hay de cada uno
        $letraM = 0;
        $letraF = 0;

        foreach ($array as $letra){
            if ($letra=="M"){
                $letraM++;
            }else {
                $letraF++;
            }
        }
    ?>

    <p>Hay <?= $letraM ?> letras M en el array.</p>
    <p>Hay <?= $letraF ?> letras F en el array.</p>
</body>
</html>