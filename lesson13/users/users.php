<?php
    require_once 'User.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM users';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'User');
    $sht->execute();
    $users = $sht->fetchAll();
    require_once 'show_users.html';
