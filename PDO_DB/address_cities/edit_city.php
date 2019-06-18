<?php
    require_once 'AddressCities.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $_GET['id'];
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM address_cities WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressCities');
    $sth->execute([':id' => $id]);
    $city = $sth->fetch();
    require_once 'edit_city.html';