<?php

    require_once 'Categories.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    $sql = 'SELECT * FROM categories';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'Categories');
    $sht->execute();
    $categories = $sht->fetchAll();
    require_once 'show_categories.html';
