<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>

<body>

<?php

    // Arrays indexados, ejemplos:
    $semana[0]="Lunes";
    $semana[1]="Martes";
    $semana[2]="Miércoles";
    $semana[3]="Jueves";
    $semana[4]="Viernes"; 

    /*
    $semana=array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes");

    echo $semana[2] . "<br>"; 

    // Arrays asociativos, ejemplos:

    $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>25);

    /* echo $datos["Apellido"] . "<br>"; */

    // Verfica si es un array o no el $datos:
    /*if(is_array($datos)){ (basado en el array $datos lines 25)
        echo "Es un array";
    }else{
        echo "No es un array";
    } 
        
    // Recorrer un array con foreach: basado en el array $datos lines 25
    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>"; 
    } */

    /*for($i=0; $i<4; $i++){
        echo $semana[$i] . "<br>"; 

    for ($i=0; $i<count($semana); $i++){
        echo $semana[$i] . "<br>";

    } */

    // Agregar un elemento al final del array asociativo:

    $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>25);
    $datos["País"]="España";

    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>"; 
    }

?>


</body>

</html>