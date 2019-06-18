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

$num = 7;

$array = range(1, $num, 1);

foreach ($array as $elem) {
    for ($i = 1; $i <= $elem; $i++) {
        $newArray[] = $elem . ",";
    }
}
function countValue (array $arr, int $val) {
    static $count = 0;
    if ($count >= 0 ) {
        echo $arr[$count];
    }
    $count++;
    if ($count < $val) {
        countValue($arr, $val);
    }
}
countValue($newArray, $num);





