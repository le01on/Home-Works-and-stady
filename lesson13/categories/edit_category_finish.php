<?php
    require_once '../PDOConnection.php';
    require_once 'Categories.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM categories WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Options');
        $sth->execute([':id' => $id]);
        $category = $sth->fetch();
        !key_exists('name', $_POST) ?: $category->setName($_POST['name']);
        !key_exists('parent', $_POST) ?: $category->setParentId($_POST['parent']);
    }

    $sql = 'UPDATE categories SET
    `name` = :name,
    `parent_id` = :parent
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $category->getName(),
        ':parent' => $category->getParentId(),
        ':id' => $id
    ]);
    header('Location: /lesson13/categories/categories.php');