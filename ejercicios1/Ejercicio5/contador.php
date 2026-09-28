<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contador.css">
    <title>contador</title>
</head>
<body>

<h1>Contadores</h1>
<p>Este contador va del 1 al 100:</p>

    <?php
        //estructura for
        for ($i=1;$i<=100;$i++){
        if ($i!=100){
            echo $i . ",";
        }else{
            echo $i;
        }
    }
?>
<p>Este contador va del 10 al 0:</p>
    <?php
    //estructura while
        $j=10;

        while ($j>=0){
            if ($j!=0){
                echo $j . "-";
            }else{
                echo $j;
            }
        $j--;
        }
    ?>
</body>
</html>