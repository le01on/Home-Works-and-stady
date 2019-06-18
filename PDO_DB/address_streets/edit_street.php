<?php
    require_once 'AddressStreets.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM address_streets WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
    $sth->execute([':id' => $id]);
    $street = $sth->fetch();
    require_once 'edit_street.html';
