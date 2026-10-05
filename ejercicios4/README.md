# PHP - Cookies y Sesiones

Ejercicios realizados sobre el uso de cookies y sesiones en PHP.

## Ejercicio 1 - Cookies

Creamos una aplicación que comprueba si existe una cookie llamada `user`.

Si la cookie no existe, utilizamos `setcookie()` para crearla y guardar nuestro nombre durante 1000 segundos. Para establecer correctamente el tiempo de caducidad utilizamos `time() + 1000`.

En las siguientes peticiones podemos acceder al valor almacenado mediante el array asociativo `$_COOKIE` y mostrar el nombre guardado en el navegador.

Funciones y conceptos utilizados:

- `$_COOKIE`
- `isset()`
- `setcookie()`
- `time()`
- Caducidad de cookies

### Resultado

![Ejercicio cookies](ejercicio1/ejcookies.png)

---

## Ejercicio 2 - Preferencias con cookies

Creamos una aplicación que permite guardar las preferencias de un usuario utilizando cookies.

En `preferencias.php` mostramos un formulario donde el usuario introduce su nombre y selecciona su color favorito.

Los datos se envían mediante `POST` a `guarda_prefs.php`, donde recogemos el nombre y el color y los almacenamos en dos cookies con una duración de 5 minutos. Después utilizamos `header()` para redirigir al usuario a `index.php`.

En `index.php` comprobamos mediante `isset()` si existen las cookies. Si existen, mostramos un mensaje de bienvenida con el nombre del usuario y utilizamos el color almacenado como fondo de la página. Si no existen, mostramos la página de inicio con fondo blanco y un enlace para configurar las preferencias.

También creamos `borrar_prefs.php`, que elimina las cookies estableciendo una fecha de caducidad pasada y redirige de nuevo a la página principal.

Funciones y conceptos utilizados:

- `$_POST`
- `$_COOKIE`
- `isset()`
- `setcookie()`
- `time()`
- `header()`
- Creación y eliminación de cookies
- Redirecciones
- Uso de valores almacenados en cookies

### Formulario de preferencias

![Formulario de preferencias](ejercicio2/preferencias.png)

### Página con preferencias guardadas

![Index con cookie](ejercicio2/indexConCookie.png)

### Página sin preferencias

![Index sin cookie](ejercicio2/indexSinCookie.png)

---

## Ejercicio 3 - Calificación de alumnos con sesiones

Creamos una aplicación para gestionar las calificaciones de los alumnos del módulo de DWES utilizando sesiones.

Mediante un formulario introducimos el nombre del alumno y las notas de los tres trimestres. Los datos enviados mediante `POST` se guardan en un array asociativo que representa a cada alumno.

Los alumnos se almacenan dentro de `$_SESSION["alumnos"]`. Utilizamos `[]` para añadir automáticamente cada nuevo alumno a la siguiente posición del array sin necesidad de utilizar un contador.

Después recorremos los alumnos almacenados mediante un `foreach` y mostramos en una tabla el nombre, las tres notas y la media calculada de cada alumno.

También añadimos un enlace para borrar las notas. El enlace envía el parámetro `borrar` mediante `GET`. Comprobamos su existencia con `isset()` y utilizamos `unset()` para eliminar únicamente `$_SESSION["alumnos"]`.

Funciones y conceptos utilizados:

- `session_start()`
- `$_SESSION`
- `$_POST`
- `$_GET`
- `isset()`
- `unset()`
- Arrays asociativos
- Añadir elementos mediante `$array[]`
- `foreach`
- Almacenamiento de datos entre peticiones mediante sesiones
- Cálculo de la media de las notas

### Calificación de alumnos

![Calificación de alumnos](ejercicio3/calificaciones.png)