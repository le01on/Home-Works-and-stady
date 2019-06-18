<?php

    $id = $_GET['id'];
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $sql = 'DELETE FROM categories WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':id' => $id
    ]);
    header('Location: /lesson13/categories/categories.php');