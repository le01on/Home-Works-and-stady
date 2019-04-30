<?php
require_once 'User.php';
require_once '../PDOConnection.php';
$id = $_GET['id'];
$pdo = PDOConnection::getPDO();
$sql = 'SELECT * FROM users WHERE `id`= :id';
$sth = $pdo->prepare($sql);
$sth->setFetchMode(PDO::FETCH_CLASS, 'User');
$sth->execute([':id'=> $id]);
$user = $sth->fetch();

    if (!empty($_POST)) {
        $newUser = new User();
        !key_exists('firstName', $_POST) ?: $newUser->setFirstName($_POST['firstName']);
        !key_exists('lastName', $_POST) ?: $newUser->setLastName($_POST['lastName']);
        !key_exists('email', $_POST) ?: $newUser->setEmail($_POST['email']);
        !key_exists('phone', $_POST) ?: $newUser->setPhone($_POST['phone']);
        if (
            key_exists('password', $_POST)
            && key_exists('passwordConfirm', $_POST)
            && $_POST['password'] === $_POST['passwordConfirm']
        ) {
            $newUser->setPassword($_POST['password']);
        }
    }


//
//    $sql = 'UPDATE users SET(`first_name`, `last_name`, `email`, `phone`, `password`, `role_id`, `address_street_id`)
//        value (:first_name, :last_name, :email, :phone, :password, :role_id, :address_street_id)';
//    $sth = $pdo->prepare($sql);
//    $sth->execute([
//        ':first_name' => $user->getFirstName(),
//        ':last_name' => $user->getLastName(),
//        ':email' => $user->getEmail(),
//        ':phone' => $user->getPhone(),
//        ':password' => $user->getPassword(),
//        ':role_id' => 4,
//        ':address_street_id' => 1
//    ]);














print_r($user);
?>
    <form action="edit_user.php" method="post">
    <input type="text" required="required" name="firstName" placeholder="Имя"
           value="<?php echo $user->getLastName(); ?>"><br/>
    <input type="text" required="required" name="lastName" placeholder="Фамилия"
           value="<?php echo $user->getFirstName(); ?>"><br/>
    <input type="email" required="required" name="email" placeholder="Почта"
           value="<?php echo $user->getEmail(); ?>"><br/>
    <input type="text" name="phone" placeholder="Телефон"
           value="<?php echo $user->getPhone(); ?>"><br/>
    <input type="text" required="required" name="password" placeholder="Пароль"
           value="<?php echo $user->getPassword(); ?>"><br/>
    <input type="text" required="required" name="passwordConfirm" placeholder="Подтвердить пароль"
           value="<?php echo $user->getPassword(); ?>"><br/>
    <input type="submit"value="Изменить">
</form>