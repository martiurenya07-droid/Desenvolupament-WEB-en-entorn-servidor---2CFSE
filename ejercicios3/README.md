# PHP - Trabajando con Formularios

## Ejercicio 1 - calculadora.php

Creamos una calculadora que recibe los valores `x` e `y` mediante parámetros enviados por la URL utilizando el método `GET`.

Recogemos los valores mediante el array asociativo `$_GET` y realizamos las operaciones de suma, resta, multiplicación y división.

También utilizamos `$_SERVER` para obtener información sobre la petición, como la dirección del ordenador que realiza la petición mediante `REMOTE_ADDR`, los parámetros de la URL mediante `QUERY_STRING` y la ruta local del servidor mediante `DOCUMENT_ROOT`.

Separamos la lógica de la presentación utilizando dos archivos: `calculadora.php` realiza los cálculos y prepara las variables, mientras que `calculadora.view.php` se encarga de mostrar los resultados.

![Resultado del ejercicio 1](ejercicio1/calculadora.png)