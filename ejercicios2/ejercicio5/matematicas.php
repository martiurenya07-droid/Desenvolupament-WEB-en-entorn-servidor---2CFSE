<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="matematicas.css">
    <title>matematicas</title>
</head>
<body>
    <?php
        //creamos las funciones
        $num = 141414;
        $cant = 4;
        $pos = 3;
        //devuelve dígitos de num
        function digitos (int $num){
            $num = (string) $num;
            return strlen($num);
        }

        function digitoN (int $num, int $pos){
            $num = (string) $num;
            return substr($num, $pos, 1);
        }

        function quitaPorDetras(int $num, int $cant){
            $num = (string) $num;
            return substr($num, 0, -$cant);
        }

        function quitaPorDelante ($num, $cant){
            $num = (string)$num;
            return substr($num,$cant);
        }

        //finalmente mostramos por pantalla
        $digitos = digitos($num);
        echo"<p>Número de digitos del número : $digitos</p>";

        $digitoN = digitoN($num, $pos);
        echo"<p>Digitos por posición : $digitoN</p>";

        $quitaPorDetras = quitaPorDetras($num, $cant);
        echo"<p>Quitamos dígitos por detrás según posicioón : $quitaPorDetras</p>";

        $quitaPorDelante = quitaPorDelante($num, $cant);
        echo"<p>Quitamos dígitos por delante según posicioón : $quitaPorDelante</p>";
    ?>
</body>
</html>