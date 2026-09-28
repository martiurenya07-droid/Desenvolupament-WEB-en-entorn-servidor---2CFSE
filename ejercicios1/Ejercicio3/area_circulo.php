<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="area_circulo.css">
    <title>area_circulo</title>
</head>
<body>
    <?php
        $radio=3.5;
        define("PI",3.1416);
        $calculo=($radio*$radio)*PI;
    ?>
<div>
<p>El area del circulo es: <?= number_format($calculo, 2) ?> </p>
</div>
</body>
</html>