<?php
//ИСПОЛЬЗОВАНИЕ СТРОКИ

$fullName = "Иванов Иван Петрович";

$lastNameStr = strrchr($fullName, " ");
$lastName = mb_substr($lastNameStr, 1, 1);

$nameStr = strstr($fullName, " ");
$name = mb_substr($nameStr, 1, 1);

$firstName = strstr($fullName, " ", true);

printf('%s %s. %s.<br>', $firstName, $name, $lastName);


//ИСПОЛЬЗОВАНИЕ МАСИВА

$arr = [
    'Иванов Иван Петрович'
];

$fullname = implode($arr);//переводим значения масива в строку
$names = explode(" ", $fullname);//сроку разделяем с помощью пробела и получаем масив подстрок

$firstName = $names[0];
$name = mb_substr($names[1], 0, 1);
$lastname = mb_substr($names[2], 0, 1);

printf('%s %s. %s.<br>', $firstName, $name, $lastname);
