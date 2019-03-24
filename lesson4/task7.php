<?php

$ar1 = range(90, 150, 3);
$ar2 = range(150, 90, 3);

$ar3 = array_combine($ar2, $ar1);

$ar4 = $ar3;
ksort($ar4);

echo var_dump($ar3) . "<br>";
echo var_dump($ar4) . "<br>";