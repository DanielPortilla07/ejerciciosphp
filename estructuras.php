<?php

//Almacene en una variable un numero para que identifique el dia 
//de la semana es (1 --> Lunes, 2 --> Martes, ..., 5 --> viernes)

$day = 6;

switch ($day)
{
    case 1:
        echo 'Hoy es Lunes <br>';
        break;
    case 2:
        echo 'Hoy es Martes <br>';
        break;
    case 3:
        echo 'Hoy es Miercoles <br>';
        break;
    case 4:
        echo 'Hoy es Jueves <br>';
        break;
    case 5:
        echo 'Hoy es Viernes <br>';
        break;
    default:
        echo 'ingresaste mal la información, intenta solo del 1 hasta el 5 <br>';
}

//while

$n = 1;

while ($n <= 10) {
    //echo $n . '<br>';
    //$n++;
    //$n += 1;
    $n = $n + 1;
}


// Escribir los números pares hasta el 20
// Modifique estructura, para que indique si es 
// multiplo de 4

$N = 2;

while ($N <= 20) {
    if ($N % 4 == 0) {
        echo $N . ' es multiplo de 4 <br>';
    }
    else {
        echo $N . '<br>';
    }
    $N = $N + 2;
}

// Impriman los numero primos del 1 hasta el 100
// divible 1 y por el mismo

// Los numero primos del 1 al 100 son:
// n .... 100


?>