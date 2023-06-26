<!DOCTYPE html>
<html>
<head>
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="../Util/css/styles.css">

</head>
<?php
require_once('../Controller/UserController.php');

$datos = new UserController();
$result = $datos->getUsers();
include 'home.php';
?>
<body>
    
    <h1 >Lista de usuarios</h1>
    <br>
    <p> Lista de usuarios del sistema con sus perfiles asociados</p>
    <br>
    
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