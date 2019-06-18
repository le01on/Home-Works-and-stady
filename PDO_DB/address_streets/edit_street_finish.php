<?php
    require_once '../PDOConnection.php';
    require_once 'AddressStreets.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM address_streets WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
        $sth->execute([':id' => $id]);
        $street = $sth->fetch();
        !key_exists('street', $_POST) ?: $street->setName($_POST['street']);
        !key_exists('type', $_POST) ?: $street->setType($_POST['type']);
    }

    $sql = 'UPDATE address_streets SET
    `name` = :name,
    `type` = :type
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $street->getName(),
        ':type' => $street->getType(),
        ':id' => $id
    ]);
    header('Location: /lesson13/address_streets/streets.php');

