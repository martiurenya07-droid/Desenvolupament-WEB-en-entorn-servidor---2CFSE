<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muestraImagen.css">
    <title>Imagen</title>
</head>
<body>
    <?php 
        //cojemos imagen subida
        
        $rutaImagen = $_FILES["imagen"]["tmp_name"];
        if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
            $nombre = $_FILES["imagen"]["name"];
        
            move_uploaded_file($_FILES["imagen"]["tmp_name"], "uploads/$nombre");
        }

        //definimos destino imagen
        $destino = "uploads/$nombre";
        
        //moves la imagen a una carpeta nuestra
        move_uploaded_file($rutaImagen, $destino);

        //finalmente mostramos la imagen
        header("Refresh:5; url=subidaImagen.php");
        echo "<img src='$destino'>";
    ?>
</body>
</html>