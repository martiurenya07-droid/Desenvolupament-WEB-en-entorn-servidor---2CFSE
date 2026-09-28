<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
</head>
<body>
    <?php
        //creamos la función cuenta($a, $b)
        echo"<p>";
        function cuenta ($a, $b){
            for ($i=$a; $i <= $b; $i++) { 
                if($i != $b) echo"$i, ";
                else echo"$i";
            }
        echo"</p>";
        }

        //la probamos con a que será 10 y b que será 20
        cuenta(10,20);
    ?>
</body>
</html>