<style>
    .br {
        background-color: #F5F5F5;
        border: 1px solid #E3E3E3;
        border-radius: 5px;
        box-shadow: 0 0 5px #E3E3E3;
        color: #666;
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        margin: 50px auto;
        padding: 20px;
        width: 400px;
    }
</style>


<?php
if (isset($_POST["button"])) {
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calcular($operacion, $numero1, $numero2);
}
function calcular($operacion, $numero1, $numero2)
{

    if (!strcmp("Suma", $operacion)) {
        echo "El resultado es: " . ($numero1 + $numero2);
    } elseif (!strcmp("Resta", $operacion)) {
        echo "El resultado es: " . ($numero1 - $numero2);
    } elseif (!strcmp("Multiplicación", $operacion)) {
        echo "El resultado es: " . ($numero1 * $numero2);
    } elseif (!strcmp("División", $operacion)) {
        echo "El resultado es: " . ($numero1 / $numero2);
    } elseif (!strcmp("Resto", $operacion)) {
        echo "El resultado es: " . ($numero1 % $numero2);
    } elseif (!strcmp("Incremento", $operacion)) {
        $numero1++;
        echo "El resultado es: " . $numero1;
    } elseif (!strcmp("Decremento", $operacion)) {
        $numero1--;
        echo "El resultado es: " . $numero1;
    }
}
// crear un button para volver atras al formulario de operadores_matematicos.html usando un href con un input type="button"


echo "<br><br><a href='operadores_matematicos.html'>Volver</>";

?>