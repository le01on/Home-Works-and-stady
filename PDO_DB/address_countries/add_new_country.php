<?php
    require_once 'AddressCountries.php';
    require_once 'DbCountry.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newCountry = new AddressCountries();
        !key_exists('country', $_POST) ?: $newCountry->setCountry($_POST['country']);


        $pdo = PDOConnection::getPDO();
        $dbCountry = new DbCountry($pdo);
        $dbCountry->create($newCountry);
        header('Location: /lesson13/address_countries/countries.php');
    }
    require_once 'add_new_country.html';