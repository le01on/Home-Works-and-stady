<?php
    require_once '../PDOConnection.php';
    require_once 'OptionTypes.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM option_types WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'OptionTypes');
        $sth->execute([':id' => $id]);
        $optionTypes = $sth->fetch();
        !key_exists('option_types', $_POST) ?: $optionTypes->setName($_POST['option_types']);
    }

    $sql = 'UPDATE option_types SET
    `name` = :name
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $optionTypes->getName(),
        ':id' => $id
    ]);
    header('Location: /lesson13/option_types/option_types.php');