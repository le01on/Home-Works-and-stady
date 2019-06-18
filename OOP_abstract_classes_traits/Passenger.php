<?php


trait Passenger
{
    private $maxPassenger;
    private $passenger = 0;

    public function __construct(int $maxPassenger)
    {
        $this->maxPassenger = $maxPassenger;
    }

    public function getPassenger(): int
    {
    return $this->passenger;
    }

    public function setMaxPassenger($maxPassenger): int
    {
        $this->maxPassenger = $maxPassenger;
    }

    public function getMaxPassenger(): int
    {
        return $this->maxPassenger;
    }

    public function setPassenger(int $passenger)
    {
        if($this->state == 'load'){
        if($passenger < $this->maxPassenger && $passenger >= 0) {
            return $this->passenger = $passenger;
            } elseif ($passenger > $this->maxPassenger){
                echo "Заданое количество пасажиров превышает свободние места: " . $this->freePlaces();
            }else
            echo "Не коректный ввод";
        }else
            echo "Переведите транспортное средство в режим посадки: 'load'";
    }

    public function freePlaces(): int
    {
        return $this->maxPassenger - $this->getPassenger();
    }
    public function addPassenger(int $newPassenger)
    {
        if($this->state == 'load') {
            if ($newPassenger <= $this->freePlaces()) {
                return $this->passenger += $newPassenger;
            } else
                echo "Нехватает свободных мест";
        }else
            echo "Переведите транспортное средство в режим посадки: 'load'";
    }
    public function unloadPassenger(int $countPassenger)
    {
        if ($this->state == 'unload') {
            if ($countPassenger <= $this->getPassenger()) {
                return $this->passenger = ($this->passenger - $countPassenger);
            } else echo 'Не коректный ввод проверьте количество пассажиров на  борту';
        } else
            echo "Переведите транспортное средство в режим высадки: 'unload'";
    }

}