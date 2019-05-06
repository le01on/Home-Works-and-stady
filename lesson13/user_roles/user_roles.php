<?php
    require_once 'UserRoles.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM user_roles';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'UserRoles');
    $sht->execute();
    $userRoles = $sht->fetchAll();

    require_once 'show_user_roles.html';
