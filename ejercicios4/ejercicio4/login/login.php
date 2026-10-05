<?php
// empezamos la sesión
session_start();

//comprobamos si ha llegado el formulario
if (isset($_POST["login"])) {
    //guardamos diferentes variables
    $usuario = $_POST["login"];
    $contraseña = $_POST["password"];

    //abrimos archivo
    $archivo = fopen("usuarios.txt", "r");

    while (!feof($archivo)) {
        //sacamos primero
        $fila = fgetcsv($archivo, null, ":", '"', "\\");

        //comprobamos si fila es false para evitar errores
        if ($fila === false) {
            break;
        }

        //comprobamos usuario y contraseña
        if ($fila[0] == $usuario && $fila[1] == $contraseña) {
            //guardamos en la sesion el usuario
            $_SESSION["loginusu"] = $usuario;

            //cerramos archivo
            fclose($archivo);

            //redirigimos a index.php
            header("Location:index.php");
            exit();
        }
    }
    //si llega hasta aqui quiere decir que ha sido incorrecto
    echo '<p class="error">Login o contraseña incorrectos</p>';

    //cerramos archivo
    fclose($archivo);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>

<body>

    <h1>Iniciar sesión</h1>

    <form action="login.php" method="post">

        <label>Usuario:</label>
        <input type="text" name="login" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Entrar</button>

    </form>


</body>

</html>