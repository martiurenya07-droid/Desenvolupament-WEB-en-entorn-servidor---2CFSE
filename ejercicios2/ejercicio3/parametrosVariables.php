<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="parametrosVariables.css">
    <title>parametrosVariables</title>
</head>
<body>
    <?php
        //creamos funcion
        function mayor (){
            //cojemos todos los números que hemos recibido por parámetro y los metemos en array
            $numeros = func_get_args();

            //sacamos el mayo de todos (sin usar max)
            $mayor = $numeros[0];
            for ($i=0; $i < count($numeros); $i++) { 
                if ($numeros[$i]>$mayor){
                    $mayor = $numeros[$i];
                }
            }
            return $mayor;
        } 
    
    //ejecutamos función
    $mayor = mayor(1,2,3,4,5,6);

    //mostramos por pantalla
    echo"<p>El número mayor es: $mayor</p>";
    ?>
</body>
</html>