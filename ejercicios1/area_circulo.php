<?php
$radio=3.5;
define("PI",3.1416);
$calculo=($radio*$radio)*PI;
?>
<link rel="stylesheet" href="area_circulo.css">

<div>
<p>El area del circulo es: <?= number_format($calculo, 2) ?> </p>
</div>