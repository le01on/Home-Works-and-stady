<?php
    require_once 'OptionTypes.php';
    require_once 'DbOptionsType.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newOptionType = new OptionTypes();
        !key_exists('option_type', $_POST) ?: $newOptionType->setName($_POST['option_type']);


        $pdo = PDOConnection::getPDO();
        $dbOptionsType = new DbOptionsType($pdo);
        $dbOptionsType->create($newOptionType);
        header('Location: /lesson13/option_types/option_types.php');
    }
    require_once 'add_new_option_type.html';