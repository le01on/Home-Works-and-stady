<?php
    require_once 'Company.php';
    require_once 'DbCompany.php';
    require_once '../PDOConnection.php';

    if (!empty($_POST)) {
        $newCompany = new Company();
        !key_exists('company', $_POST) ?: $newCompany->setName($_POST['company']);


        $pdo = PDOConnection::getPDO();
        $dbCompany = new DbCompany($pdo);
        $dbCompany->create($newCompany);
        header('Location: /lesson13/company/company.php');
    }
    require_once 'add_new_company.html';