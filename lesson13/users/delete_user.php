<?php

$id = $_GET['id'];
require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $sql = 'DELETE FROM users WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':id' => $id
    ]);
require_once 'delete_user.html';