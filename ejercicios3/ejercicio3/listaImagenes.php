<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listaImagenes.css">
    <title>Lista Imagenes</title>
</head>
<body>
    <?php
        //guardamos todas las imagenes que hay en la carpeta uploads
        $archivos = scandir("uploads");

        echo"<ul>";
        //bucle que las recorre y muestra nombre
        for ($i=0; $i < count($archivos); $i++) {
            if ($i!=0 && $i!=1){
                $nombre = $archivos[$i];
                //mostramos nombre
                echo"<li>$nombre</li>";
            }
        }
        echo"</ul>";
    ?>
</body>
</html>