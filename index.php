<?php

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