<?php
    require_once 'OptionTypes.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM option_types WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'OptionTypes');
    $sth->execute([':id' => $id]);
    $optionTypes = $sth->fetch();
    require_once 'edit_option_type.html';