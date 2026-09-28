# Ejercicios PHP 2 - Uso de Funciones

## Ejercicio 1 - contador.php

### Enunciado

Crear una página llamada `contador.php`.

Crear una función llamada `cuenta($a, $b)` que reciba dos parámetros y vaya contando de un número al otro, separando los números por comas.

Después, probar la función haciendo que cuente del 10 al 20.

### Desarrollo

Se ha creado la función `cuenta($a, $b)`, que recibe dos números como parámetros.

Dentro de la función se utiliza un bucle `for` que comienza en el valor de `$a` y continúa hasta llegar al valor de `$b`.

En cada vuelta del bucle se muestra el número correspondiente seguido de una coma, excepto en el último número, que se muestra sin coma.

Finalmente, se llama a la función pasando los valores `10` y `20`:

```php id="x8w5nj"
cuenta(10,20);
```

### Resultado

La función muestra los números comprendidos entre 10 y 20 separados por comas:

`10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20`

![Resultado del ejercicio 1](ejercicio1/contador.png)

---

## Ejercicio 2 - intercambia.php

### Enunciado

Crear una página llamada `intercambia.php`.

Crear una función llamada `intercambia` que reciba dos parámetros numéricos por referencia e intercambie sus valores.

### Desarrollo

Se han creado dos variables, `$a` y `$b`, con los valores `10` y `20`.

Después, se ha creado la función `intercambia(&$a, &$b)`. Los parámetros se pasan por referencia utilizando `&`, permitiendo que los cambios realizados dentro de la función afecten a las variables originales.

Dentro de la función se utilizan dos variables auxiliares para guardar temporalmente los valores:

```php id="2z8jys"
$a2 = $b;
$b2 = $a;

$a = $a2;
$b = $b2;
```

Después se ejecuta la función pasando las dos variables:

```php id="izb7oj"
intercambia($a,$b);
```

Finalmente, se muestran los valores de `$a` y `$b` para comprobar que se han intercambiado correctamente.

### Resultado

Antes de ejecutar la función:

`a = 10, b = 20`

Después de ejecutar la función:

`a = 20, b = 10`

![Resultado del ejercicio 2](ejercicio2/intercambia.png)

---

## Ejercicio 3 - parametrosVariables.php

### Enunciado

Crear una función que devuelva el mayor de todos los números recibidos como parámetros variables:

`function mayor(): int`

Utilizar las funciones `func_get_args()`, etc.

No se puede utilizar la función `max()`.

### Desarrollo

Se ha creado la función `mayor()`, que puede recibir una cantidad variable de números como parámetros.

Dentro de la función se utiliza `func_get_args()` para recoger todos los parámetros recibidos y almacenarlos en un array:

```php id="6uztku"
$numeros = func_get_args();
```

Se toma el primer elemento del array como mayor inicialmente:

```php id="itk5xs"
$mayor = $numeros[0];
```

Después, mediante un bucle `for`, se recorren todos los números y se compara cada uno con el valor almacenado en `$mayor`.

Si se encuentra un número mayor, se actualiza su valor:

```php id="b1nqjm"
if ($numeros[$i] > $mayor){
    $mayor = $numeros[$i];
}
```

Finalmente, la función devuelve el número mayor utilizando `return`.

La función se prueba pasando varios números:

```php id="xztv4a"
$mayor = mayor(1,2,3,4,5,6);
```

### Resultado

Para los números `1, 2, 3, 4, 5, 6`, la función muestra:

`El número mayor es: 6`

![Resultado del ejercicio 3](ejercicio3/parametrosVariables.png)

---

## Ejercicio 4 - comprueba_hora.php

### Enunciado

Crear una variable de texto que contenga una hora, por ejemplo `21:30:12`.

Procesar por separado las horas, los minutos y los segundos y comprobar que la hora sea válida.

Por ejemplo, `12:63:11` debe considerarse una hora no válida.

### Desarrollo

Se ha creado la variable `$hora` con una hora almacenada como una cadena de texto:

```php id="a4h6wq"
$hora = "21:30:12";
```

Después, se utiliza la función `explode()` para separar la cadena utilizando `:` como separador y guardar cada parte en un array:

```php id="nweqlq"
$partes = explode(":", $hora);
```

De esta forma:

- `$partes[0]` contiene las horas.
- `$partes[1]` contiene los minutos.
- `$partes[2]` contiene los segundos.

Inicialmente se considera que la hora no es válida:

```php id="nt3sy5"
$es_valida = "no";
```

Después se comprueba que las horas estén entre `0` y `23`, y que los minutos y segundos estén entre `0` y `59`.

```php id="zk7jzm"
if (($partes[0]>=0&&$partes[0]<=23) &&
    ($partes[1]>=0&&$partes[1]<=59) &&
    ($partes[2]>=0&&$partes[2]<=59))
    $es_valida = "si";
```

Si todas las condiciones se cumplen, la variable `$es_valida` pasa a tener el valor `"si"`.

Finalmente, se muestra por pantalla si la hora introducida es válida o no.

### Resultado

Utilizando:

`21:30:12`

se obtiene:

`La hora es válida: si`

![Resultado del ejercicio 4](ejercicio4/comprueba_hora.png)