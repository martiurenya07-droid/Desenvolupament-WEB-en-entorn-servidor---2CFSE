<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info_basica.css">
    <title>info_basica</title>
</head>
<body>
    <?php
        $nombre = "Martí";
        $anyoNacimiento = 2007;
    ?>


<div class="tarjeta">
    <h1>Información básica</h1>
    <p>Me llamo <?= $nombre ?> y nací en el año <?= $anyoNacimiento ?>.</p>
</div>
</body>
</html>