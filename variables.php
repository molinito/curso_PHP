<!DOCTYPE html>
<html>
<head>
    <title>Curso PHP</title>
</head>
<body>
    <h1>Variables</h1>
    

    <?php
        // crear 2 Variables de ejemplo
        $nombre = "Juan";
        $nombre1 = "Pedro";
        $edad = 20;
        $edad1 = 30;
        // Imprimir las variables
        print "El nombre es: $nombre <br>";
        print "La edad es: $edad <br>";
        print "El nombre es: " . $nombre1 . " y su edad es: " . $edad1 . "<br>";
        echo $nombre1, $edad1;// no hay diferencia con el print de abajo
        print $nombre1 . $edad1;
        print $nombre1 . " " . $edad1; // hace la concatenacion quedando Pedro 30
        print $nombre1 . " tiene " . $edad1 . " años"; // hace la concatenacion quedando Pedro tiene 30 años
        print $nombre1 . " tiene " . $edad1 . " años <br>"; // hace la concatenacion quedando Pedro tiene 30 años
        

    
    ?>