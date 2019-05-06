<?php
    require_once 'Company.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM company WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'Company');
    $sth->execute([':id' => $id]);
    $company = $sth->fetch();
    require_once 'edit_company.html';