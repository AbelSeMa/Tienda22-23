<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <?php
    require 'auxiliar.php';
    cabecera();
    ?>
    <form action="" method="get">
        <fieldset>
            <legend>Buscador de artículos</legend>
            <label>
                Nombre artículos
                <input type="text" id="nombre" size="15">
                Código
                <input type="number" id="codigo"><br><br>
                <fieldset>
                    <legend>Precio</legend> <br>
                    Desde
                    <input type="number" id="precio_desde">
                    Hasta
                    <input type="number" id="precio_hasta">
                </fieldset>

            </label>
        </fieldset>
    </form>
</body>
</html>