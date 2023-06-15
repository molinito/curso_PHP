<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar datos BD desde la pagina FORMULARIO</title>
    <style>

    h1{
        text-align: center;
        color: #00f;
        border-bottom: dotted #0000ff;
        width: 50%;
        margin: auto;
    }

    table{
        border: 1px solid #F00;
        padding: 20px 50px;
        margin-top: 50px;
    }

    body{
        background-color: #FFC;
    }

    </style>
</head>

<body>
<h1>Registro de Artículos</h1>
<form name="form1"  method="get" action="insertar_registros.php">
    <table border="0" align="center">
    <tr>

        <td>Item</td>
        <td><label for="item"></label>
        <input type="text" name="item" id="item"></td>
    </tr>
    <tr>
        <td>Descripción</td>
        <td><label for="descripción"></label>
        <input type="text" name="descripción" id="descripcion"></td>
    </tr>

    <tr>
        <td>Stock</td>
        <td><label for="stock"></label>
        <input type="text" name="stock" id="stock"></td>
    </tr>
    <tr>
        <td>OC</td>
        <td><label for="oc"></label>
        <input type="text" name="oc" id="oc"></td>
    </tr>
    <tr>
        <td>Consumo</td>
        <td><label for="consumo"></label>
        <input type="text" name="consumo" id="consumo"></td>
    </tr>
    <br>
    <tr>
        <td colspan="2"><input type="submit" name="enviando" value="Insertar"></td>
        <td colspan="2"><input type="submit" name="enviando" value="Borrar"></td>
    </tr>
    </table>


</form>

</body>

</html>