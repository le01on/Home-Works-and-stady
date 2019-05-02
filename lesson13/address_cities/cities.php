<?php

    require_once 'AddressCities.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    $sql = 'SELECT * FROM address_cities';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'Categories');
    $sht->execute();
    $cities = $sht->fetchAll();
    require_once 'show_cities.html';
