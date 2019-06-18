<?php
require_once 'State.php';
require_once 'Passenger.php';

class  Airplane extends State
{
    use Passenger;

    public function move()
    {
        return $this->state = 'fly';// TODO: Implement move() method.
    }
    public function stop()
    {
        if ($this->getPassenger() == 0) {
            return $this->state = 'stop';// TODO: Implement stop() method.
        }else return false;
    }
}