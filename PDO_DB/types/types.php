<?php
    require_once 'Types.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM types';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'Types');
    $sht->execute();
    $types = $sht->fetchAll();

    require_once 'show_types.html';