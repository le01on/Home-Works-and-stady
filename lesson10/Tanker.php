<?php
require_once 'Ship.php';

$tanker = new Ship(380000);
$tanker->load();
$tanker->setWeight(300000);
$tanker->unload();
$tanker->unloadWeight(20000);
$tanker->load();
$tanker->addWeight(100000);
$tanker->unload();
$tanker->unloadWeight(380000);
