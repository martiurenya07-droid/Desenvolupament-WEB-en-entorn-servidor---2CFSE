<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CasasRuralesTelefonos.css">
    <title>Casas rurales</title>
</head>
<body>
    <?php 
        //abirmos el csv en modo lectura y guardamos en la variable archivo
        $archivo = fopen("casas_rurales.csv", "r");

        //contador descartadas
        $contador = 0;

        //lógica mostrar todas las filas con telefono y aumentar el contador para las que no tienen
        $fila = fgetcsv($archivo, null, ";", '"', "\\");
        echo"<h3>$fila[0], $fila[1], $fila[3], $fila[9]</h3>";
        echo "<ul>";
        while (!feof($archivo)){
            //leemos la fila
            $fila = fgetcsv($archivo, null, ";", '"', "\\");

            //comprobamos si fila es false para evitar errores
            if ($fila === false){
                break;
            }
                    
            //miramos si tiene telefono
            if ($fila[9]==""){
                $contador++;
            }else{
                echo"<li>$fila[0], $fila[1], $fila[3], $fila[9]</li>";
            }
        }
        echo"</ul>";
        fclose($archivo);

        //mostramos numero de filas sin telefono
        echo"<p>Número sin teléfono: $contador</p>";
    ?>
</body>
</html>