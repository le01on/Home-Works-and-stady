<?php
// 1) задание с использованием if/else
$num = 1;

if ($num == 1) {
  $result = "зима";
  }
elseif ($num == 2) {
     $result = "весна";
}
elseif ($num == 3) {
    $result = "лето";
}
elseif($num == 4) {
    $result = "осень";
}
else{
    $result = "переданное чило не соответствует времени года";
};

echo $result . "<br>";


// 1) задание с использованием swich-case
$num = 2;

switch ($num) {
    case 1:
        $result = "зима";
         break;
    case 2:
        $result = "весна";
        break;
    case 3:
        $result = "лето";
        break;
    case 4:
        $result = "осень";
        break;
    default:
        $result = "переданное чило не соответствует времени года";

};

echo $result . "<br>";


// 2) задание с использованием if/else
$day = 10;

if ($day > 0 && $day <= 10) {
    $result = "первая декада";
}
elseif ($day > 10 && $day <=20) {
    $result = "вторая декада";
}
elseif ($day > 20 && $day <=30) {
    $result = "третья декада";
}
else{
    $result = "переданное чило не верно";
};

echo $result . "<br>";


// 2) задание с использованием swich-case
$day = 30;

switch ($day) {
    case $day > 0 && $day <= 10:
        $result = "первая декада";
        break;
    case $day > 10 && $day <=20:
        $result = "вторая декада";
        break;
    case $day > 20 && $day <=30:
        $result = "третья декада";
        break;
    default:
        $result = "переданное чило не верно";

};

echo $result . "<br>";


// 3) задание с использованием if/else
$mounth = 12;

if ($mounth > 0 && $mounth <= 2 || $mounth == 12) {
    $result = "зима";
}
elseif ($mounth > 2 && $mounth <= 5) {
    $result = "весна";
}
elseif ($mounth > 5 && $mounth <= 8) {
    $result = "лето";
}
elseif ($mounth > 8 && $mounth <= 11) {
    $result = "осень";
}
else{
    $result = "переданное чило не соответствует времени года";
};

echo $result . "<br>";


// 3) задание с использованием swich-case
$mounth = 9;

switch ($mounth) {
    case ($mounth > 0 && $mounth <= 2 || $mounth == 12):
        $result = "зима";
        break;
    case ($mounth > 2 && $mounth <= 5):
        $result = "весна";
        break;
    case ($mounth > 5 && $mounth <= 8):
        $result = "лето";
        break;
    case ($mounth > 8 && $mounth <= 11):
        $result = "осень";
        break;
    default:
        $result = "переданное чило не соответствует времени года";

};

echo $result . "<br>";