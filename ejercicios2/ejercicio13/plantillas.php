<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plantillas.css">
    <title>plantillas</title>
</head>
<body>
    <?php 
        //abrimos archivo csv
        $archivo = fopen("plantillas.csv", "r");

        //sacamos el primero que no nos interesa
        $fila = fgetcsv($archivo, null, ",", '"', "\\");

        //metemos en un array todos los dorsales de los diferentes jugadores
        $dorsales = [];
        $contador = 0;
        while (!feof($archivo)){
            //leemos fila
            $fila = fgetcsv($archivo, null, ",", '"', "\\");

            //coprobamos si fila es false, para evitar errores
            if ($fila === false){
                break;
            }

            //guardamos el dorsal en array
            $dorsales[$contador] = $fila[11];

            //aumentamos contador
            $contador++;
        }

        //cerramos el archivo
        fclose($archivo);
        $archivo = null;

        //ordenamos array
        sort($dorsales);

        //lógica sacar por pantalla jugadores en una tabla ordenados por su dorsal
        $archivo = fopen("plantillas.csv","r");
        

        echo"<table>";
        $fila = fgetcsv($archivo, null, ",", '"', "\\");
        echo"<tr>";
            for ($i=0; $i < count($fila); $i++) { 
                echo"<th>";
                echo"$fila[$i]";
                echo"</th>";
            }
        echo"</tr>";
        $contador = 0;
        $contadorRepe = 0;
        for ($i=0; $i < count($dorsales); $i++) {
            fclose($archivo);
            $archivo = null;
            $archivo = fopen("plantillas.csv","r");
            echo "<tr>";
            while(!feof($archivo)){
                //leemos la fila
                $fila = fgetcsv($archivo, null, ",", '"', "\\");

                //comprobamos si fila es false para evitar errores
                if ($fila === false){
                    break;
                }

                if ($dorsales[$contador] == $fila[11]){
                    if ($contadorRepe!=0){
                            break;
                        }
                    for ($j=0; $j < count($fila); $j++) {
                        echo"<td>$fila[$j]</td>";
                    }
                    $contadorRepe++;
                }
            }
            echo"</tr>";
            $contadorRepe = 0;
            $contador++;
        }
        echo"</table>";
        fclose($archivo);
    ?>
</body>
</html>