<?php

require_once 'PDOConnection.php';
require_once 'traits/SnakeCaseCamelCase.php';
require_once 'classes/Users.php';
require_once 'classes/UserRoles.php';
require_once 'classes/AddressCountries.php';
require_once 'classes/AddressCities.php';
require_once 'classes/AddressStreets.php';

$pdo = PDOConnection::getPDO();

$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$sql = 'SELECT * FROM users';
$dbh = $pdo->prepare($sql);
$dbh->setFetchMode(PDO::FETCH_CLASS, 'Users');
$dbh->execute();
$users = $dbh->fetchAll();

require_once 'HTMLTables/show_users.html';

$sql = 'SELECT * FROM user_roles';
$dbh = $pdo->prepare($sql);
$dbh->setFetchMode(PDO::FETCH_CLASS, 'UserRoles');
$dbh->execute();
$roles = $dbh->fetchAll();

require_once 'HTMLTables/show_users_roles.html';

$sql = 'SELECT * FROM address_countries';
$dbh = $pdo->prepare($sql);
$dbh->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
$dbh->execute();
$addressCountries = $dbh->fetchAll();

require_once 'HTMLTables/show_address_countries.html';

$sql = 'SELECT * FROM address_cities';
$dbh = $pdo->prepare($sql);
$dbh->setFetchMode(PDO::FETCH_CLASS, 'AddressCities');
$dbh->execute();
$addressCities = $dbh->fetchAll();

require_once 'HTMLTables/show_address_cities.html';

$sql = 'SELECT * FROM address_streets';
$dbh = $pdo->prepare($sql);
$dbh->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
$dbh->execute();
$addressStreets = $dbh->fetchAll();

require_once 'HTMLTables/show_address_streets.html';
