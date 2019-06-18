<?php
    require_once '../PDOConnection.php';
    require_once 'Options.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM options WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Options');
        $sth->execute([':id' => $id]);
        $options = $sth->fetch();
        !key_exists('name', $_POST) ?: $options->setName($_POST['name']);
    }

    $sql = 'UPDATE options SET
    `name` = :name
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $options->getName(),
        ':id' => $id
    ]);
    header('Location: /lesson13/options/options.php');