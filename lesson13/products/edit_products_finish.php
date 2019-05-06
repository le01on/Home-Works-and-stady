<?php
 require_once '../PDOConnection.php';
 require_once 'Products.php';
 session_start();
 $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM products WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Products');
        $sth->execute([':id' => $id]);
        $products = $sth->fetch();
        !key_exists('name', $_POST) ?: $products->setName($_POST['name']);
        !key_exists('description', $_POST) ?: $products->setDescription($_POST['description']);
        !key_exists('price', $_POST) ?: $products->setPrice($_POST['price']);
           }

    $sql = 'UPDATE products SET
    `name` = :name,
    `description` = :description,
    `price` = :price
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $products->getName(),
        ':description' => $products->getDescription(),
        ':price' => $products->getPrice(),
        ':id' => $id
    ]);

    header('Location: /lesson13/products/products.php');