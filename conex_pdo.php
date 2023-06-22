<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conexion a BBDD con PDO</title>
</head>

<body>
    <?php
    try{
        $base=new PDO('mysql:host=localhost; dbname=materiales', 'root', '');//creamos la conexion a la base de datos materiales con el usuario root y sin contraseña   
        echo "Conexión OK";
    }catch(Exception $e){ // en caso de error que nos muestre el mensaje de error
        die('Error: ' . $e->GetMessage());
    }finally{// por ultimo cerramos la conexion
        $base=null;//cerramos la conexion
    }
    // arriba hemos creado la conexion a la base de datos materiales con el usuario root y sin contraseña
    ?>
    

</body>

</html>
