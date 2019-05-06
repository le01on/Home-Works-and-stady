<?php
    require_once 'UserRoles.php';
    require_once 'DbUserRoles.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newUserRoles = new UserRoles();
        !key_exists('name', $_POST) ?: $newUserRoles->setName($_POST['name']);
        !key_exists('key', $_POST) ?: $newUserRoles->setKey($_POST['key']);
        !key_exists('createAt', $_POST) ?: $newUserRoles->setCreateAt($_POST['createAt']);


        $pdo = PDOConnection::getPDO();
        $dbUserRoles = new DbUserRoles($pdo);
        $dbUserRoles->create($newUserRoles);
        header('Location: /lesson13/user_roles/user_roles.php');
    }
    require_once 'add_new_user_roles.html';
