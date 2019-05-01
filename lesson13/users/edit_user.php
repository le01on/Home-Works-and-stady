<?php
require_once 'User.php';
require_once '../PDOConnection.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $_GET['id'];
    $pdo = PDOConnection::getPDO();
    $sql = 'SELECT * FROM users WHERE `id`= :id';
    $sth = $pdo->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
    $sth->execute([':id' => $id]);
    $user = $sth->fetch();
require_once 'edit_user.html';

//    if (!empty($_POST)) {
//        $newUser = $user;
//        !key_exists('firstName', $_POST) ?: $newUser->setFirstName($_POST['firstName']);
//        !key_exists('lastName', $_POST) ?: $newUser->setLastName($_POST['lastName']);
//        !key_exists('email', $_POST) ?: $newUser->setEmail($_POST['email']);
//        !key_exists('phone', $_POST) ?: $newUser->setPhone($_POST['phone']);
//        if (
//            key_exists('password', $_POST)
//            && key_exists('passwordConfirm', $_POST)
//            && $_POST['password'] === $_POST['passwordConfirm']
//        ) {
//            $newUser->setPassword($_POST['password']);
//        }
//    }
//
//
//
//    $sql = 'UPDATE users SET
//    `first_name` = :first_name,
//    `last_name` = :last_name,
//    `email` = :email,
//    `phone` = :phone,
//    `password` = :password,
//    `role_id` = :role_id,
//    `address_street_id` = :address_street_id
//       WHERE id = :id';
//    $sth = $pdo->prepare($sql);
//    $sth->execute([
//        ':first_name' => $newUser->getFirstName(),
//        ':last_name' => $newUser->getLastName(),
//        ':email' => $newUser->getEmail(),
//        ':phone' => $newUser->getPhone(),
//        ':password' => $newUser->getPassword(),
//        ':role_id' => 4,
//        ':address_street_id' => 1,
//        'id' => $id
//    ]);














//
//?>
<!--    <form action="edit_user.php" method="post">-->
<!--    <input type="text" required="required" name="firstName" placeholder="Имя"-->
<!--           value="--><?php //echo $user->getLastName(); ?><!--"><br/>-->
<!--    <input type="text" required="required" name="lastName" placeholder="Фамилия"-->
<!--           value="--><?php //echo $user->getFirstName(); ?><!--"><br/>-->
<!--    <input type="email" required="required" name="email" placeholder="Почта"-->
<!--           value="--><?php //echo $user->getEmail(); ?><!--"><br/>-->
<!--    <input type="text" name="phone" placeholder="Телефон"-->
<!--           value="--><?php //echo $user->getPhone(); ?><!--"><br/>-->
<!--    <input type="text" required="required" name="password" placeholder="Пароль"-->
<!--           value="--><?php //echo $user->getPassword(); ?><!--"><br/>-->
<!--    <input type="text" required="required" name="passwordConfirm" placeholder="Подтвердить пароль"-->
<!--           value="--><?php //echo $user->getPassword(); ?><!--"><br/>-->
<!--    <input type="submit"value="Изменить">-->
<!--</form>-->