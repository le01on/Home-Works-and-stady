<?php
require_once 'State.php';
require_once 'Cargo.php';

class Ship extends State
{
    use Cargo;

    public function move()
    {
        return $this->state = 'sail';// TODO: Implement move() method.
    }
    public function stop()
    {
        if ($this->getWeight() == 0) {
            return $this->state = 'stop';// TODO: Implement stop() method.
        } return false;
    }
}