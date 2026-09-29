<?php
    //guardamos credenciales correctas
    $credenciales = ["marti"=>"1234","pepe"=>"1234", "jose"=>"1234"];

    //comprobamos que son correctos las credenciales que se han enviado
    $correctoTodo = false;
    $contraseñaIncorrecta = false;
    if (array_key_exists($_POST["usuario"], $credenciales)){
        if ($credenciales[$_POST["usuario"]] ==  $_POST["contraseña"]){
            $correctoTodo = true;
        }else{
            $contraseñaIncorrecta = true;
        }
    }

    //ponemos la página que toque dependiendo si es correcto
    if ($correctoTodo){
        include("ok.php");
    }else {
        include("ko.php");
    }
?>