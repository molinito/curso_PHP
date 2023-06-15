<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>

<body>
    <?php

        // Arrays multidimensionales, ejemplos:

        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "cítrico"=>"mandarina",
                                        "otros"=>"manzana"),
                         "leche"=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"),
                         "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata"));

       // echo $alimentos["carne"]["vacuno"]; // aqui accede al valor "lomo" del array multidimensional $alimentos

        // Recorrer un array multidimensional con foreach:

        /*
        foreach($alimentos as $clave_alim=>$alim){
            echo "$clave_alim:<br>";

            foreach($alim as $clave=>$valor){
                echo "$clave=$valor<br>";
            }
            echo "<br>";
        } */

        // Recorre un array multidimensional con var_dump:

        echo var_dump($alimentos);
        

    ?>

</body>
</html>