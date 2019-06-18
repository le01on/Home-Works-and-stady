<?php
require_once 'Products.php';
require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $_GET['id'];
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM products WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'Products');
    $sth->execute([':id' => $id]);
    $products = $sth->fetch();
require_once 'edit_products.html';

