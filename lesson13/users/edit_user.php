<?php
require_once 'User.php';
require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $_GET['id'];
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM users WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'Products');
    $sth->execute([':id' => $id]);
    $user = $sth->fetch();
require_once 'edit_user.html';

