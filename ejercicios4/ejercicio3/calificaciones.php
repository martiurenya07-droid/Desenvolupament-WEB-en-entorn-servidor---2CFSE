<?php
    // empezamos la sesión
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calificaciones.css">
    <title>Calificación Alumnos</title>
</head>
<body>
    <h1>Calificación Alumnos</h1>

    <form action="calificaciones.php" method="post">

        <label>Nombre alumno:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Nota 1:</label>
        <input type="number" name="nota1" min="0" max="10" step="0.1" required>

        <br><br>

        <label>Nota 2:</label>
        <input type="number" name="nota2" min="0" max="10" step="0.1" required>

        <br><br>

        <label>Nota 3:</label>
        <input type="number" name="nota3" min="0" max="10" step="0.1" required>

        <br><br>

        <button type="submit">Añadir</button>

    </form>
    <br>
    <a href="calificaciones.php?borrar=1">Borrar notas</a>
    <br>
    <h2>Lista de Alumnos</h2>
    <?php
        //comprobamos si usuario quiere borrar la lista
        if(isset($_GET["borrar"])){
            unset($_SESSION["alumnos"]);
        }

        //comprobamos que existe y luego guardamos los valores
        if (isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];

            //array alumno 
            $alumno = ["nombre" => $nombre, "nota1" => $nota1, "nota2" => $nota2, "nota3" => $nota3];

            //añadimos un alumno
            $_SESSION["alumnos"][] = $alumno;
        }

        //mostramos a todos los alumnos
        echo "<table>";
        echo "<tr>";
            echo "<th> Nombre </th>";
            echo "<th> Nota1 </th>";
            echo "<th> Nota2 </th>";
            echo "<th> Nota3 </th>";
            echo "<th> Media </th>";
        echo "</tr>";

        if (isset($_SESSION["alumnos"])){
            foreach ($_SESSION["alumnos"] as $alumnoActual) {
                echo "<tr>";
                $nombreActual = $alumnoActual["nombre"];
                $nota1Actual = $alumnoActual["nota1"];
                $nota2Actual = $alumnoActual["nota2"];
                $nota3Actual = $alumnoActual["nota3"];
                $media = ($nota1Actual + $nota2Actual + $nota3Actual)/3;
                echo"<td>$nombreActual</td>";
                echo"<td>$nota1Actual</td>";
                echo"<td>$nota2Actual</td>";
                echo"<td>$nota3Actual</td>";
                echo"<td>$media</td>";
                echo "</tr>";
            }
        }
        echo "</table>";      
    ?>
</body>
</html>