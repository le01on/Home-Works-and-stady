<?php
session_start();

if (isset($_REQUEST['submit'])) {
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['nikname'] = $_REQUEST['nikname'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['password'] = $_REQUEST['password'];
}
var_dump($_SESSION);
?>

<form action="" method="post">
    <label>Введите Имя</label>
    <input name="name"><br>
    <label>Введите Ваш Ник</label>
    <input name="nikname"><br>
    <label>Введите email</label>
    <input type="email"><br>
    <label>Введите Пароль</label>
    <input type="password"><br>
    <input type="submit" name="submit" value="Отправить">
</form>
