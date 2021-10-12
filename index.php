<?php

// Declarar 3 variables y comparar con IF si son iguales en valor (==) y en valor y tipo (===)
// Realizar una comparacion de un valor menor que otro 
// Ambos casos imprimir un resultado en pantalla 
$var1 = 7;
$var2 = 7;
$var3 = "7";

// Comparación en valor
if ($var1 == $var2 and $var2 == $var3){
    echo 'Comparación en valor: <br>' . $var1 . ', ' . $var2 . ' y ' . $var3 . ' son iguales en valor <br>';
} else {
    echo 'Comparación en valor: <br>' . $var1 . ', ' . $var2 . ' y ' . $var3 . ' no son iguales en valor <br>';
}

// Comparación en valor y tipo
if ($var1 === $var2 and $var2 === $var3){
    echo 'Comparación en valor y tipo: <br>' . $var1 . ', ' . $var2 . ' y ' . $var3 . ' son iguales en valor y tipo <br>';
} else {
    echo 'Comparación en valor y tipo: <br>' . $var1 . ', ' . $var2 . ' y ' . $var3 . ' no son iguales en valor y tipo <br>';
}

// Usuario mayor o menor de edad
$user = "Daniel";
$ages = 18;

if ($ages > 17){
    echo 'Bienvenido ' . $user . ' puedes ingresar';
} else {
    echo 'No puedes ingresar, eres menor de edad';
}


// Número par o impar
$num = 102;

if ($num%2 == 0){
    echo '<br> El número ' . $num . ' es par';
} else {
    echo '<br> El número ' . $num . ' es impar';
}


?>