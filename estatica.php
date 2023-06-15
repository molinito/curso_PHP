<!DOCTYPE   html>
<html>
<head>
    <title>Curso PHP</title>
</head>

<body>
    <h1>Variables Estaticas</h1>
    <?php
    function incrementaVariable(){
        static $contador = 0; // con la palabra reservada static hacemos que la variable $contador no se destruya al salir de la funcion
        $contador++;
        echo $contador . "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    // con este codigo podemos ver que la variable $contador no se destruye al salir de la funcion y se va
    // incrementando a medida que se llama a la funcion
     ?>
