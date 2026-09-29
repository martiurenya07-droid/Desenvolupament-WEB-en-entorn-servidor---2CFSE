<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ko</title>
</head>
<body>
<p>Las credenciales introducidas no son correctas</p>
<?php 
    if ($contraseñaIncorrecta){
        echo"<p>El usuario es correcto pero la contraseña no</p>";
    }else {
        echo"<p>El usuario y la contraseña son incorrectas</p>";
    }

    //incluimos formulario para que vuelva a intentarlo
    include("login.php");
?>
</body>
</html>