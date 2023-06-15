<!DOCTYPE html>
<html>
<head>
    <title>Curso PHP</title>
</head>

<body>
    <h1>Flujos</h1>
    <p>Esta es una página de prueba para el curso de PHP</p>


    <?php
     echo " Este es un primer de prueba <br>";

     //usamos la función include para llamar al archivo proporciona_datos.php
    include ("proporciona_datos.php"); // llamada al archivo proporciona_datos.php
    // tambien se puede usar la funcion "require" en lugar de "include" pero si no encuentra el archivo proporciona_datos.php nos dara un error fatal y no continuara con la ejecucion del programa 
     echo " Este es un segundo de prueba <br>";

     dameDatos(); // llamada a la función


     // estructuras: condicionales, bucles, funciones
     // condicionales: if, if-else, if-elseif-else, switch
        // bucles: for, while, do-while, foreach
        // funciones: definir funciones, funciones predefinidas

       
            
    
    ?>

