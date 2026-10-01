<?php
    //ponemos todo lo que nos piden en variables
    $get  = ($_GET);
    $suma = $_GET["x"] + $_GET["y"];
    $resta = $_GET["x"] - $_GET["y"];
    $multiplicacion = $_GET["x"] * $_GET["y"];
    $division = $_GET["x"] / $_GET["y"];
    $server = $_SERVER;
    $peticion = $_SERVER["REMOTE_ADDR"]; 
    $parametros = $_SERVER["QUERY_STRING"];
    $ruta = $_SERVER["DOCUMENT_ROOT"];

    //mostramos datos con la vista
    include("calculadora.view.php");
?>