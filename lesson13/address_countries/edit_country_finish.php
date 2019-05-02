<?php
    require_once '../PDOConnection.php';
    require_once 'AddressCountries.php';
    session_start();
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM address_countries WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
        $sth->execute([':id' => $id]);
        $country = $sth->fetch();
        !key_exists('country', $_POST) ?: $country->setCountry($_POST['country']);
    }

    $sql = 'UPDATE address_countries SET
    `country` = :country
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':country' => $country->getCountry(),
        ':id' => $id
    ]);

    echo "Страна изменена!" . "<br>";
?>
<a href="countries.php">Вернуться к списку всех стран</a>