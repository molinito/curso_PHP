<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Código fuente</title>
</head>
<body>
    <?php
        include("concesionario.php");// incluimos el código de la clase Compra_vehiculo

        Compra_vehiculo::$ayuda=10000;// modificamos el valor de la variable estática

        $compra_Antonio=new Compra_vehiculo("compacto");
        $compra_Antonio->climatizador();
        $compra_Antonio->tapiceria_cuero("blanco");
        echo "El precio final del coche de Antonio es " . $compra_Antonio->precio_final() . "<br>";

        $compra_Ana=new Compra_vehiculo("compacto");
        $compra_Ana->climatizador();
        $compra_Ana->tapiceria_cuero("rojo");
        echo "El precio final del coche de Ana es " . $compra_Ana->precio_final() . "<br>";
    ?>

</body>
</html>
