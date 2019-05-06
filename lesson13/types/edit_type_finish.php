<?php
    require_once '../PDOConnection.php';
    require_once 'Types.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM types WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Company');
        $sth->execute([':id' => $id]);
        $types = $sth->fetch();
        !key_exists('type', $_POST) ?: $types->setName($_POST['type']);
    }

    $sql = 'UPDATE types SET
    `name` = :name
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $types->getName(),
        ':id' => $id
    ]);
    header('Location: /lesson13/types/types.php');