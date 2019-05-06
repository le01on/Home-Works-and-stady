<?php

    require_once 'AddressCities.php';
    require_once 'DbCity.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newCity = new Options();
        !key_exists('Name', $_POST) ?: $newCity->setName($_POST['Name']);


        $pdo = PDOConnection::getPDO();
        $dbCity = new DbOptions($pdo);
        $dbCity->create($newCity);
        header('Location: /lesson13/address_cities/categories.php');
    }
    require_once 'add_new_city.html';