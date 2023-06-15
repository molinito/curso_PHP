<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ejemplo condicionales</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            background-color: #FFC;
            border:#666 5px solid;
            padding: 5px;
        }
        .no_validado{
            font-size: 18px; 
            color: #F00;
            font-weight: bold;
        }
        .validado{
            font-size: 18px;
            color: #0C3;
            font-weight: bold;
        }

        </style>

</head>
<body>  

<h1>Condicionales 2da parte</h1>

<form action="validaciones_condicionales2.php" method="post" name="datos_usuarios" id="datos_usuarios">
    <table width="15%" align="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label>
            <input type="text" name="edad_usuario" id="edad_usuario"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="button" value="Enviar"></td>
        </tr>
    </table>
</form>


</body>

</html>