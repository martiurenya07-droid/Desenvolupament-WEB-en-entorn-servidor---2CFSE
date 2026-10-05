# PHP - Trabajando con Formularios

## Ejercicio 1 - calculadora.php

Creamos una calculadora que recibe los valores `x` e `y` mediante parámetros enviados por la URL utilizando el método `GET`.

Recogemos los valores mediante el array asociativo `$_GET` y realizamos las operaciones de suma, resta, multiplicación y división.

También utilizamos `$_SERVER` para obtener información sobre la petición, como la dirección del ordenador que realiza la petición mediante `REMOTE_ADDR`, los parámetros de la URL mediante `QUERY_STRING` y la ruta local del servidor mediante `DOCUMENT_ROOT`.

Separamos la lógica de la presentación utilizando dos archivos: `calculadora.php` realiza los cálculos y prepara las variables, mientras que `calculadora.view.php` se encarga de mostrar los resultados.

![Resultado del ejercicio 1](ejercicio1/calculadora.png)

---

## Ejercicio 2 - formulario.html y formulario.php

Creamos un formulario utilizando Bootstrap para recoger diferentes datos del usuario y enviarlos mediante el método `POST` a `formulario.php`.

El formulario permite introducir el nombre y apellidos, email, página personal, sexo y número de convivientes.

También utilizamos campos múltiples para seleccionar diferentes aficiones mediante `checkbox` y diferentes menús favoritos mediante un `select` múltiple. Utilizamos `[]` en el atributo `name` para recibir estas selecciones como arrays en PHP.

En `formulario.php` recogemos los datos mediante `$_POST`. Para los campos múltiples utilizamos `isset()` para comprobar que han sido enviados y recorremos sus arrays para mostrar las opciones seleccionadas.

Finalmente mostramos todos los datos recibidos en una tabla resumen utilizando Bootstrap.

### Formulario

![Formulario del ejercicio 2](ejercicio2/formulario.png)

### Tabla resumen

![Tabla resumen del ejercicio 2](ejercicio2/tablaFormulario.png)

---

## Ejercicio 3 - subida de imágenes

Creamos un formulario para subir imágenes al servidor mediante el método `POST` y utilizando `enctype="multipart/form-data"`.

Los datos del archivo enviado se reciben mediante el array asociativo `$_FILES`, desde el que podemos obtener información como el nombre original del archivo y su ubicación temporal.

Utilizamos `is_uploaded_file()` para comprobar que el archivo procede de una subida y `move_uploaded_file()` para mover la imagen desde su ubicación temporal hasta la carpeta `uploads`.

Después de subir la imagen, la mostramos en pantalla y utilizamos `header()` con `Refresh` para volver automáticamente al formulario después de 5 segundos.

También creamos una página para consultar los archivos almacenados en la carpeta `uploads`. Para ello utilizamos `scandir()`, que devuelve un array con el contenido del directorio. Recorremos este array y evitamos mostrar las entradas `.` y `..`.

### Formulario de subida

![Formulario de subida](ejercicio3/subidaImagen.png)

### Imagen subida

![Imagen subida](ejercicio3/muestraImagen.png)

### Lista de imágenes

![Lista de imágenes subidas](ejercicio3/listaImagenes.png)