<?php
require_once 'GroundTransport.php';

$truck = new GroundTransport(20);
$truck->load();
$truck->setWeight(12);
$truck->move();
$truck->load();
$truck->addWeight(8);
$truck->move();
$truck->unload();
$truck->unloadWeight(20);
