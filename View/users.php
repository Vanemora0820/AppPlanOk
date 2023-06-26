<!DOCTYPE html>
<html>
<head>
    <title>Lista de usuarios</title>
</head>
<?php
require_once('../Controller/UserController.php');

$datos = new UserController();
$result = $datos->getUsers();
?>
<body>
    <h1>Lista de usuarios</h1>
    <link rel="stylesheet" href="../Util/css/styles.css">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Perfil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $user): ?>
                <tr>
                    <td><?php echo $user->getId(); ?></td>
                    <td><?php echo $user->getName().' '. $user->getLastName()?></td>
                    <td><?php echo $user->getProfile()->getName(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>