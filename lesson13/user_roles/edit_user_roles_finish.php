<?php
    require_once '../PDOConnection.php';
    require_once 'UserRoles.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM user_roles WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'UserRoles');
        $sth->execute([':id' => $id]);
        $userRoles = $sth->fetch();
        !key_exists('name', $_POST) ?: $userRoles->setName($_POST['name']);
        !key_exists('key', $_POST) ?: $userRoles->setKey($_POST['key']);
    }

    $sql = 'UPDATE user_roles SET
    `name` = :name,
    `key` = :key
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $userRoles->getName(),
        ':key' => $userRoles->getKey(),
        ':id' => $id
    ]);
    header('Location: /lesson13/user_roles/user_roles.php');

