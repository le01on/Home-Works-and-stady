<?php

spl_autoload_register('autoload');

function autoload($nameClass) {

    $path = explode("\\", $nameClass);

    $path[0] = 'src';

    $strPath = implode($path, '/') . '.php';

    require_once $strPath;
}
