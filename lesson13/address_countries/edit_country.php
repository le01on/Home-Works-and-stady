<?php
    require_once 'AddressCountries.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM address_countries WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
    $sth->execute([':id' => $id]);
    $country = $sth->fetch();
    require_once 'edit_country.html';