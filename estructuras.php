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
    echo $n . '<br>';
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

$num = 1; // variable usada para ir hasta el 100
$I = 2; // variable entre la cual se va a dividir $num 
$primo = 0; // divisores de $num - lleva una cuenta

while ($num <= 100) { // contador de 1 a 100
    $primo = 0; // cada iteracion re estrablecemos el valor del contador de divisores
    while ($I < $num) { // implica que $i = divisores seran menores al numero ej: 5 toma divisores 2, 3, 4
        if ($num % $I == 0) { // si $num es divisible por alguno, no es primo
            $primo++; // cuenta los divisores
        }
        $I++; // iteramos de 1 en 1 los divisores
    }
    if ($primo == 0) { // validamos si el contador de divisores permanecio en 0
        echo $num . ' es primo <br>'; // imprimimos en pantalla los PRIMOS
    }
    $I=2; // re estrablecemos los divisores en 2 
    $num++; // aumentamos de 1 en 1 
}

// Ejercicio 5

for ($i=1; $i <=100 ; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz <br>';
    } elseif ($i % 3 == 0) {
        echo 'Fizz <br>';
    } elseif ($i % 5 == 0) {
        echo 'Buzz <br>';
   } else {
       echo $i . '<br>';
    } 
}

// Ejercicio 6

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

foreach ($semana as $key => $value) {
    echo $key . ' --> ' . $value . '<br>';
}

?>