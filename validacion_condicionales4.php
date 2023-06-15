<style>
        h1{
            text-align: center;
        }
        table{
            background-color: #FFC;
            border:#666 5px solid;
            padding: 5px;
        }
        .no_validado{
            font-size: 18px; 
            color: #F00;
            font-weight: bold;
        }
        .validado{
            font-size: 18px;
            color: #0C3;
            font-weight: bold;
        }

        </style>


<?php

if (isset($_POST["enviando"]))
{
    $contra = $_POST["contra_usuario"];
    $nombre = $_POST["nombre_usuario"];

    /* Linea siguiente para evaluar si el usuario es Juan, Pedro o Maria
    switch ($nombre) {
        case 'Juan':
            echo "Usuario autorizado. Hola Juan";
            break; // break is needed to stop the switch statement from executing more code or case testing
        case 'Maria':
            echo "Usuario autorizado. Hola Maria";
            break;
        case 'Pedro':
            echo "Usuario autorizado. Hola Pedro";
            break;
        default: // default funcionará como else
            echo "Usuario no autorizado";
            break;
    } */

    // La siguiente linea para verificar la edad del usuario

    /* if ($edad <= 18)
    {
        echo "Eres menor de edad";
    }
    else if ($edad <= 40)
    {
        echo "Eres joven";
    }
    else if ($edad <= 65)
    {
        echo "Eres maduro";
    }
    else
    {
        echo "Cuidate";
    } */

    // La siguiente linea para verificar si el usuario es Juan, Pedro o Maria y sus contraseñas
    // Switch statement is used to perform different actions based on different conditions similar to if else statement

    switch (true): // true is used to evaluate the expression in each case
        case $nombre == "Juan" && $contra == "1234":
            echo "Usuario autorizado. Hola Juan";
            break;
        case $nombre == "Maria" && $contra == "5678":
            echo "Usuario autorizado. Hola Maria";
            break;
        case $nombre == "Pedro" && $contra == "0000":
            echo "Usuario autorizado. Hola Pedro";
            break;
        default:
            echo "Usuario no autorizado";
            break;

            endswitch;

        }

?>