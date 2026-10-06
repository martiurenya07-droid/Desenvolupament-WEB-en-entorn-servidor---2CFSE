<?php
    //empezamos sesión
    session_start();
    if (!isset($_SESSION["precio_total"])){
        $_SESSION["precio_total"] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carro.css">
    <title>Carro</title>
</head>

<body>
    <?php
    //array de articulos
    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
    );

    //mostramos lista articulos con sus precios etc
    echo "<h1>Lista artículos: </h1>";
    echo"<ul>";
    foreach ($articulos as $articulo){
        $id = $articulo["id"];
        $nombre = $articulo["nombre"];
        $precio = $articulo["precio"];
        echo"<li>";
        echo"<a href='carro.php?id=$id'>Nombre: $nombre Precio: $precio</a>";
        echo"</li>";
    }
    echo"</ul>";

    //lógica carro de la compra
    echo"<br>";
    echo"<h1>Carro de la compra: </h1>";
    if (isset($_GET["id"])) {
        //si se ha pulsado link
        $id_actual = $_GET["id"];
        //extraemos articulo al cual pertenece
        foreach ($articulos as $articulo){
            if ($articulo ["id"] == $id_actual){
                $_SESSION["articulos"][] = $articulo;
                $_SESSION["precio_total"] += $articulo["precio"];
            }
        }
    }

    //mostramos lista con el carrito de la compra
    if (isset($_SESSION["articulos"])){
        echo "<ul>";
            foreach ($_SESSION["articulos"] as $articulo){
                $id = $articulo["id"];
                $nombre = $articulo["nombre"];
                $precio = $articulo["precio"];
                echo"<li>";
                echo"Nombre: $nombre Precio: $precio";
                echo"</li>"; 
            }
        echo "</ul>";

        //total acumulado de dinero
        $precio_total = $_SESSION["precio_total"];
        echo "<h2 class='precio-total'>Precio total: $precio_total €</h2>";
    }
    ?>
</body>
</html>