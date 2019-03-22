<?php

$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var;

// Решение

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var = $var ++;
$var = $var --;
echo $var;
