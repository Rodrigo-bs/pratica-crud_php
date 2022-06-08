<?php

    include './assets/functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <table class="registros">
        <thead>
            <td>
                <th>Nome</th>
                <th>Descição</th>
                <th>ID</th>
            </td>
        </thead>
        <tbody>
            <?php mostrar_registros(); ?>
        </tbody>
    </table>
</body>
</html>