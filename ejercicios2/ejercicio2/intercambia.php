<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="intercambia.css">
    <title>intercambia</title>
</head>
<body>
    <?php
        //declaramos e inicializamos las variables
        $a = 10;
        $b = 20;
        //creamos funcion intercambia
        function intercambia(&$a, &$b){
            $a2 = $b;
            $b2 = $a;

            $a = $a2;
            $b = $b2;
        }

        //ejecutamos funcion
        intercambia($a,$b);

        //mostramos por pantalla para ver como han cambiado
        echo"<p> a = $a, b = $b </p>";
    ?>
</body>
</html>