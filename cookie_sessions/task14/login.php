<?php
session_start();
$login = '';
if (isset($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
}
?>

<form action="" method="post">
    <h4>Вход в личный кабинет</h4>
    <label>login</label>
    <input type="text" name="login" placeholder="Введите Ваш Ник или email">
    <label>Введите Пароль</label>
    <input type="password" placeholder="Введите Пароль" name="pass">
    <input type="submit" name="submit" value="Отправить">
    <?php
    if ($login === $_SESSION['email'] && $_REQUEST['pass'] === $_SESSION['password']) {
        header('Location: /task14/profile.php');
    }elseif ($login === $_SESSION['nikname'] && $_REQUEST['pass'] === $_SESSION['password']) {
        header('Location: /task14/profile.php');
    }else echo "<br>" . "<br>" . "Вы еще не ввели логин и пароль или введенные данные не совпадают"
    ?>
</form>