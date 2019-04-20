<?php
require_once 'GroundTransport.php';

$truck = new GroundTransport(20);
$truck->load();
$truck->setWeight(12);
$truck->addWeight(8);
$truck->unload();
$truck->unloadWeight(20);
