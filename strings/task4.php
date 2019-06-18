<?php

$firstName = 'Иванов';
$name = 'Иван';
$serName ='Петрович';
$resultName = iconv_substr($name, 0, 1, "UTF-8");
$resultSerName = iconv_substr($serName, 0, 1, "UTF-8");
echo $firstName . " " . $resultName . ". " . $resultSerName . ".";

