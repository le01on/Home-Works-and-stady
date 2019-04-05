<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();


if (isset($_REQUEST['submit'])) {
    $_SESSION['login'] = $_POST['login'];
}


/*if ($_REQUEST['login'] === $_SESSION['nikname'] || $_REQUEST['login'] === $_SESSION['email']
    && $_REQUEST['password'] === $_SESSION['password']){?>
    <a href="profile.php">perehod</a><?php
}
else echo "некоректнпй ввод"?>
*/
var_dump($_SESSION);
print_r($_SESSION);
?>

<form action="" method="post">
    <label>login</label>
    <input name="login" placeholder="Введите Ваш Ник или email">
    <label>Введите Пароль</label>
    <input type="password" placeholder="Введите Пароль">
    <input type="submit" name="submit" value="Отправить">
</form>