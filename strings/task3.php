<?php

$age = 29;
$str = 'Мне много лет';
$seach = 'много';
$newStr = str_replace($seach, $age, $str);
echo $newStr;
