<?php

    $id = $_GET['id'];
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $sql = 'DELETE FROM address_cities WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':id' => $id
    ]);
    header('Location: /lesson13/address_cities/cities.php');