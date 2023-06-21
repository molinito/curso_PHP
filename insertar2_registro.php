<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar datos BD desde la pagina</title>
</head>

<body>


<?php
    
    if (isset($_GET["enviando"])) { // si se ha pulsado el boton de enviar
        $itm = $_GET["item"];
        $descr = $_GET["descripción"];
        $stk = $_GET["stock"];
        $oc = $_GET["oc"];
        $cons = $_GET["consumo"];
    
        require("datosBD.php");
    
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre); // se conecta a la BBDD
    
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD: " . mysqli_connect_error() . " - " . mysqli_connect_errno(); // si falla la conexion
            exit();
        }
    
        mysqli_set_charset($conexion, "utf8"); // para que se reconozcan los acentos latinos y caracteres especiales
    
        $query = "INSERT INTO Hoja1 (Item, Descripción, Stock, OC, Consumo) VALUES ('$itm', '$descr', '$stk', '$oc', '$cons')"; // para que busque la palabra en cualquier parte de la descripción
    
        $resultados = mysqli_query($conexion, $query); // se ejecuta la consulta
    
        if ($resultados == false) {// si falla la consulta
            echo "Error en la consulta: " . mysqli_error($conexion);
        } else {
            echo "Registro guardado exitosamente<br><br>";
            echo "<table><tr><td>$itm</td></tr>";
            echo "<tr><td>$descr</td></tr>";
            echo "<tr><td>$stk</td></tr>";
            echo "<tr><td>$oc</td></tr>";
            echo "<tr><td>$cons</td></tr></table>"; 
        }
    
        mysqli_close($conexion); // se cierra la conexion
    }
    
    ?> 

</body>
</html>