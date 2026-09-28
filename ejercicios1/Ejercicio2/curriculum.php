<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="curriculum.css">
    <title>curriculum</title>
</head>
<body>
    <?php
        $nombre="Martí";
        $estudios_es = "ESO y Ciclo Medio de Sistemas Microinformáticos y Redes";
        $estudios_va = "ESO i Cicle Mitjà de Sistemes Microinformàtics i Xarxes";
        $estudios_en = "ESO and Intermediate Vocational Training in Microcomputer Systems and Networks";
        $idioma="va";
        $buscar="estudios_".$idioma;
        $edad=18;
        $lugar_nac="Barcelona";
        $idiomas="valenciano, español, inglés y aleman";
    ?>
<div>
    <h1>Currículum Vitae</h1>
    <br>
    <p>Me llamo <?=$nombre?>, tengo <?=$edad?> y nací en <?=$lugar_nac?></p>
    <p>Tengo los siguientes estudios: <?=$$buscar?></p>
    <p>Hablo los idiomas: <?=$idiomas?>.</p>
</div>
</body>
</html>