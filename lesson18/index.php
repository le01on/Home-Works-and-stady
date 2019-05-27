<?php

use App\Config\ConfigRouts;
use App\Config\FactoryModel;
use Sunrise\Http\ServerRequest\ServerRequestFactory;

require_once './vendor/autoload.php';

FactoryModel::ini('test_db', 'root', '123', 'localhost', '3306');

$request = ServerRequestFactory::fromGlobals();

$configRouts = new ConfigRouts($request);
$router = $configRouts->init();

$router->matchCurrentRequest();