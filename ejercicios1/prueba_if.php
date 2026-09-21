<?php
$nota1=1;
$nota2=2;
$nota3=2;

//calculamos nota mayor
if ($nota1>$nota2&&$nota1>$nota3){
    $notamayor=$nota1;
}else if($nota2>$nota1&&$nota2>$nota3){
    $notamayor=$nota2;
}else if($nota3>$nota1&&$nota3>$nota2){
    $notamayor=$nota3;
}

//si hay empate
if($nota1==$nota2&&$nota2>$nota3){
    $notamayor=$nota2;
}else if($nota1==$nota2&&$nota2<$nota3){
    $notamayor=$nota3;
}else if($nota2==$nota3&&$nota2<$nota1){
    $notamayor=$nota1;
}else if($nota2==$nota3&&$nota2>$nota1){
    $notamayor=$nota2;
}else if($nota3==$nota1&&$nota3<$nota2){
    $notamayor=$nota2;
}else if($nota3==$nota1&&$nota3>$nota2){
    $notamayor=$nota3;
}
?>
<link rel="stylesheet" href="prueba_if.css">
<div>
    <p>La nota mayor es: <?=$notamayor?></p>
</div>