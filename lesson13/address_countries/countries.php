<?php
    require_once 'AddressCountries.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM address_countries';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
    $sht->execute();
    $addressCountries = $sht->fetchAll();

    require_once 'show_address_countries.html';