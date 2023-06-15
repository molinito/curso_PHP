<?php
// Ambitos de las variables. En PHP tenemos variales locales (declarada dentro de una funcion) y globales
// (declarada fuera de una funcion). Las variables locales solo se pueden usar dentro de la funcion donde se declaran
// y super globales, que ya no se utilizar porque son inseguras y se pueden usar en cualquier parte del programa fuera del script PHP
$nombres = "Juan"; // variable global

function dameNombre(){
    global $nombres; // con la palabra reservada global podemos acceder a la variable global desde dentro de la funcion
    // si la palabra global no se usa, la variable $nombres no se puede usar dentro de la funcion
    $nombres = "Maria"; // variable local
}

dameNombre();

echo $nombres;

?>