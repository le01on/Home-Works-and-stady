<?php
 require_once '../PDOConnection.php';
 require_once 'User.php';
 session_start();
 $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $pdo = PDOConnection::getPDO();
        $sql = 'SELECT * FROM users WHERE `id`= :id';
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $sth->execute([':id' => $id]);
        $user = $sth->fetch();
        !key_exists('firstName', $_POST) ?: $user->setFirstName($_POST['firstName']);
        !key_exists('lastName', $_POST) ?: $user->setLastName($_POST['lastName']);
        !key_exists('email', $_POST) ?: $user->setEmail($_POST['email']);
        !key_exists('phone', $_POST) ?: $user->setPhone($_POST['phone']);
        if (
            key_exists('password', $_POST)
            && key_exists('passwordConfirm', $_POST)
            && $_POST['password'] === $_POST['passwordConfirm']
        ) {
            $user->setPassword($_POST['password']);
        }
    }

    $sql = 'UPDATE users SET
    `first_name` = :first_name,
    `last_name` = :last_name,
    `email` = :email, 
    `phone` = :phone,
    `password` = :password,
    `role_id` = :role_id, 
    `address_street_id` = :address_street_id
       WHERE id = :id';
    $sth = $pdo->prepare($sql);
    $sth->execute([
        ':first_name' => $user->getFirstName(),
        ':last_name' => $user->getLastName(),
        ':email' => $user->getEmail(),
        ':phone' => $user->getPhone(),
        ':password' => $user->getPassword(),
        ':role_id' => 4,
        ':address_street_id' => 1,
        ':id' => $id
    ]);

    echo "Пользователь изменен!" . "<br>";
    ?>
    <a href="users.php">Вернуться к списку всех пользователей</a>