<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <title>formulario php</title>
</head>
<body>
    <?php 
        //mostramos datos del formulario que recibimos a traves de post mediantes una tabla
        echo '<table class="table table-striped table-bordered">';
        //nombre y apellidos
        echo "<tr>";
        $nombre = $_POST["nombre"];
        echo"<th>Nombre y apellidos:</th> <td>$nombre</td>";
        echo "</tr>";

        //mail
        echo "<tr>";
        $email = $_POST["email"];
        echo"<th>Email:</th> <td>$email</td>";
        echo "</tr>";

        //página personas
        echo "<tr>";
        $web = $_POST["web"];
        echo"<th>Web:</th> <td>$web</td>";
        echo "</tr>";

        //sexo
        echo "<tr>";
        $sexo = $_POST["sexo"];
        echo"<th>Sexo:</th> <td>$sexo</td>";
        echo "</tr>";

        //número de convivientes
        echo "<tr>";
        $convivientes = $_POST["convivientes"];
        echo"<th>Convivientes:</th> <td>$convivientes</td>";
        echo "</tr>";

        //Aficiones
        if (isset($_POST["aficiones"])){
            $aficiones = $_POST["aficiones"];
            echo"<tr> <th>Aficiones:</th> ";
            echo"<td>";
            for ($i=0; $i < count($aficiones); $i++) {
                if ($i!=count($aficiones)-1){
                    echo"$aficiones[$i], ";
                }else{
                    echo"$aficiones[$i]";
                }
            }
            echo"</td>";
            echo"</tr>";
        }

        //Menu
        if (isset($_POST["menu"])){
            $menu = $_POST["menu"];
            echo"<tr> <th>Menu:</th> ";
            echo"<td>";
            for ($i=0; $i < count($menu); $i++) {
                if ($i!=count($menu)-1){
                    echo"$menu[$i], ";
                }else{
                    echo"$menu[$i]";
                }
            }
            echo"</td>";
            echo"</tr>";
        }
    echo"</table>";
    ?>
</body>
</html>