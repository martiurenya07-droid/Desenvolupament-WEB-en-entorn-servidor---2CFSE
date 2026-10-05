<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejcookies.css">
    <title>Ejemplo Cookies</title>
</head>
<body>
    <?php
        //comprobamos si existe o no la cookie
        if (isset($_COOKIE["user"])) {
            //la cookie existe
            $cookies = $_COOKIE;
            $user = $cookies["user"];
            echo"<p>Nombre: $user</p>" ;
        }else{
            //si no existe, la creamos
            setcookie("user", "marti", time() + 1000);

            echo"No existe";
        }
    ?>
</body>
</html>