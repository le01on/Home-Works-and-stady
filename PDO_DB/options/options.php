<?php

    require_once 'Options.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    $sql = 'SELECT * FROM options';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'Options');
    $sht->execute();
    $options = $sht->fetchAll();
    require_once 'show_options.html';
