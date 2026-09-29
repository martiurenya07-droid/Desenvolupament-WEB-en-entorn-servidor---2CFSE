<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
<form action="compruebaLogin.php" method="post">
<label for="usuario">Usuario: </label>
<input type="text" id="usuario" name="usuario">
<br>
<label for="contraseña">Contraseña: </label>
<input type="password" id="contraseña" name="contraseña">
<br>
<button type="submit">Enviar</button>
</form>
</body>
</html>