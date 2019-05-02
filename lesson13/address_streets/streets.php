<?php
    require_once 'AddressStreets.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM address_streets';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
    $sht->execute();
    $addressStreets = $sht->fetchAll();

    require_once 'show_address_streets.html';
