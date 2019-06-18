<?php
    require_once 'OptionTypes.php';
    require_once '../PDOConnection.php';

    $pdo = PDOConnection::getPDO();
    $pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
    $sql = 'SELECT * FROM option_types';
    $sht = $pdo->prepare($sql);
    $sht->setFetchMode(PDO::FETCH_CLASS, 'OptionTypes');
    $sht->execute();
    $optionTypes = $sht->fetchAll();

    require_once 'show_option_types.html';