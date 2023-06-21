<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de búsqueda</title>

</head>

<body>
    <?php
    /* UN CODIGO ALTERNTATIVO PARA ESTE EJERCICIO ES EL SIGUIENTE:
    $pais = $_GET["buscar"];//recibe el valor del input buscar del formulario de busqueda y lo guarda en la variable pais 
    require("datosBD.php"); //llama al archivo datosBD.php para obtener los datos de la base de datos
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra); //conecta con la base de datos y crea la variable conexion
    if (mysqli_connect_errno()) {//si no se conecta con la base de datos
        echo "Fallo al conectar con la BBDD";//muestra el mensaje
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");//selecciona la base de datos y si no la encuentra muestra el mensaje
    mysqli_set_charset($conexion, "utf8");// establece el tipo de caracteres a utf8

    $sql="SELECT CodigoArticulo, Seccion, Precio, PaisdeOrigen FROM productos WHERE PaisdeOrigen = ?";// crea la consulta sql
    $resultado = mysqli_prepare($conexion, $sql);//prepara la consulta sql para evitar inyeccion sql y crea la variable resultado con la consulta sql
    $ok = mysqli_stmt_bind_param($resultado, "s", $pais); //asocia los parametros de la consulta sql con los valores de las variables y crea la variable ok. aqui "s" significa que el parametro es de tipo string
    $ok = mysqli_stmt_execute($resultado); //ejecuta la consulta sql y crea la variable ok

    if($ok == false){//si no se ejecuta la consulta sql
        echo "Error al ejecutar la consulta";
    }else{// si se ejecuta la consulta sql 
        $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);//asocia los resultados de la consulta sql con las variables y crea la variable ok
        echo "Artículos encontrados: <br><br>";
        while (mysqli_stmt_fetch($resultado)) {//mientras existan resultados de la consulta sql 
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";// muestra los resultados de la consulta sql
        }
        mysqli_stmt_close($resultado);
    } */

// OTRA FORMA DE HACERLO ES LA SIGUIENTE:(ES MAS CORTA Y OPTIMIZADA)
require("datosBD.php");

function buscar_productos_por_pais($conexion, $pais) {
    $consulta = "SELECT CodigoArticulo, Seccion, NombreArticulo, Precio, PaisdeOrigen FROM productos WHERE PaisdeOrigen = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "s", $pais);
    mysqli_stmt_execute($stmt);
    $resultados = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $resultados;
}

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if (!$conexion) {
    echo "Fallo al conectar con la BBDD";
    exit();
}

mysqli_set_charset($conexion, "utf8");

$resultados = buscar_productos_por_pais($conexion, $_GET["buscar"]);

if (mysqli_num_rows($resultados) == 0) {
    echo "No se encontraron artículos para el país especificado.";
} else {
    echo "Artículos encontrados: <br><br>";
    while ($fila = mysqli_fetch_assoc($resultados)) {
        echo $fila["CodigoArticulo"] . " " . $fila["Seccion"] . " " . $fila["NombreArticulo"] . " " . $fila["Precio"] . " " . $fila["PaisdeOrigen"] . "<br>";
    }
}

mysqli_close($conexion);


    ?>

</body>