<?php

    require_once 'Options.php';
    require_once 'DbOptions.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newOptions = new Options();
        !key_exists('Name', $_POST) ?: $newOptions->setName($_POST['Name']);

        $pdo = PDOConnection::getPDO();
        $dbOptions = new DbOptions($pdo);
        $dbOptions->create($newOptions);
        header('Location: /lesson13/options/options.php');
    }
    require_once 'add_new_options.html';