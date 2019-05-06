<?php
    require_once 'Categories.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $_GET['id'];
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM categories WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'Options');
    $sth->execute([':id' => $id]);
    $category = $sth->fetch();
    require_once 'edit_category.html';