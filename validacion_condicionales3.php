<?php

if (isset($_POST["enviando"])) // aqui se valida si se ha pulsado el boton enviar
{
    $contra = $_POST["contra"];// aqui se obtiene el valor del campo contra

    $nombre = $_POST["nombre_usuario"]; // aqui se obtiene el valor del campo nombre_usuario

    // en este ejemo se usa el operador ternario
    $resultado = $nombre == "Juan" && $contra == "1234" ? "puedes acceder" : "no puedes acceder"; // aqui se valida si el nombre es igual a Juan y la contraseña es igual a 1234, si es asi se muestra el mensaje "puedes acceder" de lo contrario se muestra el mensaje "no puedes acceder"

    echo $resultado;


    }
    
?>