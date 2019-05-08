<?php
    require_once 'UserRoles.php';
    require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM user_roles WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'UserRoles');
    $sth->execute([':id' => $id]);
    $userRoles = $sth->fetch();
    require_once 'edit_user_roles.html';
