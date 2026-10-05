<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Preferencias</title>
</head>
<body>
    <form action="guarda_prefs.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                        <label class="nombre">Introduce tu nombre:</label>
                        <input type="text" name="nombre" class="nombre">

                        <label class="color">Introduce tu color favorito:</label>
                        <input type="color" name="color" class="color">
                    </div>

                    <button type="submit" class="boton">
                        Enviar
                    </button>
        </div>
    </form>
</body>
</html>