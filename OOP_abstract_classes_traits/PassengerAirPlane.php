<?php
require_once 'Airplane.php';

$passengerAirplane = new Airplane(121);
$passengerAirplane->load();
$passengerAirplane->setPassenger(90);
$passengerAirplane->move();
$passengerAirplane->load();
$passengerAirplane->addPassenger(30);
$passengerAirplane->move();
$passengerAirplane->unload();
$passengerAirplane->unloadPassenger(120);


