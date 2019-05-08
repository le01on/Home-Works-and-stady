<?php

    require_once 'Categories.php';
    require_once 'DbCategory.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newCategory = new Categories();
        !key_exists('Name', $_POST) ?: $newCategory->setName($_POST['Name']);
        !key_exists('Parent', $_POST) ?: $newCategory->setParentId($_POST['Parent']);


        $pdo = PDOConnection::getPDO();
        $dbCategory = new DbCategory($pdo);
        $dbCategory->create($newCategory);
        header('Location: /lesson13/categories/categories.php');
    }
    require_once 'add_new_category.html';