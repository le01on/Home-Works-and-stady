<?php
    require_once '../PDOConnection.php';
    require_once 'Company.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM company WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Company');
        $sth->execute([':id' => $id]);
        $company = $sth->fetch();
        !key_exists('company', $_POST) ?: $company->setName($_POST['company']);
    }

    $sql = 'UPDATE company SET
    `name` = :name
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':name' => $company->getName(),
        ':id' => $id
    ]);
    header('Location: /lesson13/company/company.php');