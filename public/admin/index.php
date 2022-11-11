<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Administración</title>
</head>
<body>
    <?php
    require '../../src/admin-auxiliar.php';
    require '../../src/auxiliar.php';
    
    $pdo = conectar();
    $sent = $pdo->query('SELECT * FROM articulos');
    ?>

    <div>
        <table>
            <thead>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precios</th>
            <th colspan="2">Acciones</th>
            </thead>
            <tbody>
                <?php foreach($sent as $fila): ?>
                <tr>
                    <td> <?= hh($fila['codigo']) ?></td>
                    <td> <?= hh($fila['descripcion']) ?></td>
                    <td> <?= hh($fila['precio']) ?></td>
                    <td> <a href="#">Editar</a></td>
                    <td> <a href="#">Borrar</a></td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="/js/flowbite.js"></script>
</body>
</html>