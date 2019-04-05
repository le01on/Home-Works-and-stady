<?php
if (!isset($_COOKIE['counter'])) {
    $_COOKIE['counter'] = 0;
} else
    $_COOKIE['counter']++;
setcookie('counter', $_COOKIE['counter']);

if (isset($_POST['name'])) {
    $_COOKIE['name'] = $_POST['name'];
}
   echo "Добро пожаловать " . $_COOKIE['name'] . "<br>";

echo "Посищений  страницы: " . $_COOKIE['counter'] . "." . "<br>";
?>
<form action="" method="post">
<input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']?>">
<input type="submit" value="Your Nik">
</form>