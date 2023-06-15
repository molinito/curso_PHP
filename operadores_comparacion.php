<!DOCTYpe html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Operadores de comparación</title>
</head>

<body>
    <?php
        $variable1 = 8;
        $variable2 = "8";
        $variable3 = "Juan";

        if($variable1 === $variable2){//Compara el valor y el tipo de dato
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
    ?>

</body>