<?php
    require_once 'Types.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM types WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'Company');
    $sth->execute([':id' => $id]);
    $types = $sth->fetch();
    require_once 'edit_type.html';