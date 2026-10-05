<?php
    //recibimos la informacion y la guardamos en variables
    $nombre = $_POST["nombre"];
    $color = $_POST["color"];

    //con estas variables creamos 2 cookies
    setcookie("nombre", $nombre, time() + 300);
    setcookie("color", $color, time() + 300);

    //incluimos index.php
    header("Location: index.php");
?>