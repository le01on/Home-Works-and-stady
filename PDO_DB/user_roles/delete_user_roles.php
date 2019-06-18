<?php

    $id = $_GET['id'];
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $sql = 'DELETE FROM user_roles WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':id' => $id
    ]);
    header('Location: /lesson13/user_roles/user_roles.php');