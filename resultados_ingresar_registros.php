<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de búsqueda</title>

</head>

<body>
    <?php
    $c_art = $_GET["c_art"];//recibe el valor del input buscar del formulario de busqueda y lo guarda en la variable pais 
    $secc = $_GET["secc"];
    $n_art = $_GET["n_art"];
    $pre = $_GET["pre"];
    $fec = $_GET["fec"];
    $imp = $_GET["imp"];
    $p_ori = $_GET["p_ori"];

    require("datosBD.php"); //llama al archivo datosBD.php para obtener los datos de la base de datos
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra); //conecta con la base de datos y crea la variable conexion
    if (mysqli_connect_errno()) {//si no se conecta con la base de datos
        echo "Fallo al conectar con la BBDD";//muestra el mensaje
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");//selecciona la base de datos y si no la encuentra muestra el mensaje
    mysqli_set_charset($conexion, "utf8");// establece el tipo de caracteres a utf8

    $sql="INSERT INTO productos (CodigoArticulo, Seccion, NombreArticulo, Precio, Fecha, Importado, PaisDeOrigen) VALUES (?, ?, ?, ?, ?, ?, ?)";//consulta sql para insertar un registro en la tabla productos
    
    
    $resultado = mysqli_prepare($conexion, $sql);//prepara la consulta sql para evitar inyeccion sql y crea la variable resultado con la consulta sql
    $ok = mysqli_stmt_bind_param($resultado, "sssssss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori); 
    $ok = mysqli_stmt_execute($resultado); //ejecuta la consulta sql y crea la variable ok

    if($ok == false){//si no se ejecuta la consulta sql
        echo "Error al ejecutar la consulta";
    }else{// si se ejecuta la consulta sql 
        // $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);//asocia los resultados de la consulta sql con las variables y crea la variable ok
        echo "Agregado nuevo registro <br><br>";
        /*while (mysqli_stmt_fetch($resultado)) {//mientras existan resultados de la consulta sql 
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";// muestra los resultados de la consulta sql
        
        } */
        mysqli_stmt_close($resultado);
    } 
    ?>

</body>
</html>


