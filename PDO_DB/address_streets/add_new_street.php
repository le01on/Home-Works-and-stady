<?php
    require_once 'AddressStreets.php';
    require_once 'DbStreet.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newStreet = new AddressStreets();
        !key_exists('type', $_POST) ?: $newStreet->setType($_POST['type']);
        !key_exists('street', $_POST) ?: $newStreet->setName($_POST['street']);


        $pdo = PDOConnection::getPDO();
        $dbStreet = new DbStreet($pdo);
        $dbStreet->create($newStreet);
        header('Location: /lesson13/address_streets/streets.php');
    }
    require_once 'add_new_street.html';
