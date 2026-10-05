<?php
    //borramos las cookies y vovemos a index.php
    setcookie("nombre", "", 1);
    setcookie("color", "", 1);

    header("Location: index.php");
?>