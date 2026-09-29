<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matematicas</title>
</head>
<body>
    <?php
        //creamos las funciones

use Dom\CharacterData;

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
            for ($i=0; $i < strlen($num); $i++) { 
                if ($i == $pos){
                    return substr($num, $i, 1);
                }
            }
        }

        function quitaPorDetras(int $num, int $cant){
            $num = (string) $num;
            return substr($num, 0, -$cant);
        }

        function quitaPorDelante ($num, $cant){
            $num = (string)$num;
            return substr($num,$cant);
        }
    ?>
</body>
</html>