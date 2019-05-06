<?php
    require_once 'Types.php';
    require_once 'DbTypes.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newType = new Company();
        !key_exists('type', $_POST) ?: $newType->setName($_POST['type']);


        $pdo = PDOConnection::getPDO();
        $dbTypes = new DbOptionsType($pdo);
        $dbTypes->create($newType);
        header('Location: /lesson13/types/types.php');
    }
    require_once 'add_new_type.html';