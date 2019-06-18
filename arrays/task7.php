<?php

$ar1 = range(90, 150, 3);
$ar2 = range(150, 90, 3);

$ar3 = array_combine($ar2, $ar1);

$ar4 = $ar3;
ksort($ar4);

print_r($ar3);
echo "<br>";
print_r($ar4);