

<?php

if (isset($_POST["enviando"]))
{
    $edad = $_POST["edad_usuario"];

    /* if ($edad < 18){
        echo "Eres menor de edad. No tienes acceso";
    } else{
        echo "Eres mayor de edad. Tienes acceso";
    } 
    
    Con "echo" (línea siguiente, simplificamos código con operadores ternarios*/

    echo $edad < 18 ? "Eres menor de edad. No tienes acceso" : "Eres mayor de edad. Tienes acceso";


    }
    
?>