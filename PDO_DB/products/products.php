<?php
    require_once 'Products.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM products';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'Products');
    $sht->execute();
    $products = $sht->fetchAll();
    require_once 'show_products.html';
