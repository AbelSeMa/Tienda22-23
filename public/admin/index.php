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
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="py-3 px-6">Código</th>
                <th scope="col" class="py-3 px-6">Descripción</th>
                <th scope="col" class="py-3 px-6">Precios</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    <?php foreach($sent as $fila): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-4 px-6"> <?= hh($fila['codigo']) ?></td>
                        <td class="py-4 px-6"> <?= hh($fila['descripcion']) ?></td>
                        <td class="py-4 px-6"> <?= hh($fila['precio']) ?></td>
                        <td class="py-4 px-6"> <a href="#">Editar</a></td>
                        <td class="py-4 px-6"> <a href="#">Borrar</a></td>
    
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="/js/flowbite/flowbite.js"></script>
</body>
</html>