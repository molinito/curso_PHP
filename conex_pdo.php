<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conexion a BBDD con PDO</title>
</head>

<body>
    <?php
    try{
        $base=new PDO('mysql:host=localhost; dbname=materiales', 'root', '');
        echo "Conexión OK";
    }catch(Exception $e){
        die('Error: ' . $e->GetMessage());
    }finally{
        $base=null;
    }
    ?>

</body>

</html>
