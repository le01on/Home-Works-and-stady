<?php


abstract class State
{
    protected $state = 'stop';

    public abstract function move();

    public function load()
    {
        return $this->state = 'load';
    }

    public function unload()
    {
        return $this->state = 'unload';
    }

    public abstract function stop();

    public function checkState()
    {
        return $this->state;
    }
}