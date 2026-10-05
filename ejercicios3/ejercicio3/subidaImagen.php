<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <title>Subida imagen</title>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Subir imagen</h2>
            </div>

            <div class="card-body">
                <form action="muestraImagen.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Sube la imagen aquí:</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Enviar
                    </button>
                </form>

                <a href="listaImagenes.php" class="btn btn-outline-secondary w-100 mt-3">
                    Ver imágenes subidas
                </a>
            </div>
        </div>
    </div>

</body>
</html>