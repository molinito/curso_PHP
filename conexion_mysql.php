<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conexion a BBDD con POO</title>

</head>

<body>

<?php
// CONECTAR A UNA DB CON POO
    $conexion= new mysqli("localhost", "root", "", "materiales"); // aqui se crea el objeto $conexion
    if($conexion->connect_errno){ // si no se conecta a la base de datos
        echo "Fallo la conexión: " . $conexion->connect_errno;
    }
    $conexion->set_charset("utf8");
    /* de la forma procedimental seria asi, que es igual a la linea de arriba
    msqli_set_charset($conexion, "utf8"); */
    $sql="SELECT * FROM productos";
        /* de la forma procedimental seria asi, 
        $resultado=mysqli_query($conexion, $sql); 
        que es igual a la linea de abajo*/

    $resultado=$conexion->query($sql); // aqui se crea el objeto $resultado
    if($conexion->errno){ // si no se ejecuta la consulta sql
        die($conexion->error);//muestra el mensaje de error
    }
    while($fila=$resultado->fetch_assoc()){ // mientras existan resultados de la consulta sql 
        echo "<table><tr><td>";
        echo $fila['CodigoArticulo'] . "</td><td>";
        echo $fila['Seccion'] . "</td><td>";
        echo $fila['NombreArticulo'] . "</td><td>";
        echo $fila['Precio'] . "</td><td>";
        echo $fila['Fecha'] . "</td><td>";
        echo $fila['Importado'] . "</td><td>";
        echo $fila['PaisDeOrigen'] . "</td><td>";
        echo "</td></tr></table>";
        echo "<br>";
    }
    $conexion->close();

?>

</body>