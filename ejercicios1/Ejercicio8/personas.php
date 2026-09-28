<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personas.css">
    <title>personas.php</title>
</head>
<body>
    <?php
        //declaramos array
        $arrayPersonas = [];

        //rellenamos array con 5 personas diferentes
        $arrayPersona1 = ["nombre" => "Martí", "altura" =>1.8, "email" => "marti@gmail.com"];
        $arrayPersonas[0] = $arrayPersona1;

        $arrayPersona2 = ["nombre" => "Jose", "altura" => 1.89, "email" => "jose@gmail.com"];
        $arrayPersonas[1] = $arrayPersona2;

        $arrayPersona3 = ["nombre" => "Mario", "altura" => 1.81, "email" => "mario@gmail.com"];
        $arrayPersonas[2] = $arrayPersona3;

        $arrayPersona4 = ["nombre" => "Vicent", "altura" => 1.40, "email" => "vicent@gmail.com"];
        $arrayPersonas[3] = $arrayPersona4;

        $arrayPersona5 = ["nombre" => "Mel", "altura" => 1.90, "email" => "mel@gmail.com"];
        $arrayPersonas[4] = $arrayPersona5;

        //finalmente mostramos por pantalla
        echo"<div>";
        echo"<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Altura</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        for ($i=0; $i < 5; $i++) {
            echo"<tr>";
            foreach ($arrayPersonas[$i] as $valor){
                echo"<td>$valor</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
        echo"</div>";
?>
</body>
</html>
