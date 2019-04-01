<?php

//1) задание

function reversCount(int $n) {
    $count = &$n;
    if($count > 0) {
        echo $count . "<br>";
    }
    $count--;
    if($count < $n || $count > 0) {
        reversCount($n);
    }
}
reversCount(10);


//2) задание

$num = 5;

$array = range(1, $num, 1);

foreach ($array as $elem) {
    for ($i = 1; $i <= $elem; $i++) {
        $newArray[] = $elem;
    }
}
$newStr = implode("", $newArray);
echo substr($newStr, 0, $num) . "<br>";

// немного другое решение без foreach

$num1 = 8;

    for ($i = 1; $i <= $num1; $i++) {
        $strArr[] = str_repeat($i, $i);
}
$str = implode("", $strArr);
  echo substr($str, 0, $num1);





