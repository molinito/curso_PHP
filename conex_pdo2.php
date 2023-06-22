<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conexion a BBDD con PDO2</title>
</head>

<body>
    <?php

    $busqueda=$_GET['buscar'];

    try{
        $base=new PDO('mysql:host=localhost; dbname=materiales', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql="SELECT NombreArticulo, Seccion, Precio, PaisDeOrigen FROM productos WHERE NombreArticulo=?";

        $resultado=$base->prepare($sql);
        $resultado->execute(array($busqueda));
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre Articulo: " . $registro['NombreArticulo'] . " Seccion: " . $registro['Seccion'] . " Precio: " . $registro['Precio'] . " Pais de Origen: " . $registro['PaisDeOrigen'] . "<br>";
        }

        $resultado->closeCursor();
    }catch(Exception $e){
        die('Error: ' . $e->GetMessage());
    }finally{
        $base=null;
    }

    ?>
    

</body>

</html>