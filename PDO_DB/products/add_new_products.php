<?php

    require_once 'Products.php';
    require_once 'DbProducts.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newProducts = new Products();
        !key_exists('name', $_POST) ?: $newProducts->setName($_POST['name']);
        !key_exists('countryId', $_POST) ?: $newProducts->setCountryId($_POST['countryId']);
        !key_exists('typeId', $_POST) ?: $newProducts->setTypeId($_POST['typeId']);
        !key_exists('categoryId', $_POST) ?: $newProducts->setCategoryId($_POST['categoryId']);
        !key_exists('description', $_POST) ?: $newProducts->setDescription($_POST['description']);
        !key_exists('price', $_POST) ?: $newProducts->setPrice($_POST['price']);

        $pdo = PDOConnection::getPDO();
        $dbProducts = new DbProducts($pdo);
        $dbProducts->create($newProducts);
        header('Location: /lesson13/products/products.php');
    }
    require_once 'add_new_products.html';