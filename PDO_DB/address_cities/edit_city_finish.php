<?php
    require_once '../PDOConnection.php';
    require_once 'AddressCities.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM address_cities WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressCities');
        $sth->execute([':id' => $id]);
        $city = $sth->fetch();
        !key_exists('city', $_POST) ?: $city->setName($_POST['city']);
    }

    $sql = 'UPDATE address_cities SET
    `name` = :name
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $city->getName(),
        ':id' => $id
    ]);
    header('Location: /lesson13/address_cities/cities.php');