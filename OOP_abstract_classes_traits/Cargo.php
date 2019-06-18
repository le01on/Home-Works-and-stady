<?php


trait Cargo
{
    private $maxWeight;
    private $weight = 0;

    public function __construct(int $maxWeight)
    {
        $this->maxWeight = $maxWeight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
    public function setMaxWeight($maxWeight): int
    {
        $this->maxWeight = $maxWeight;
    }

    public function getMaxWeight(): int
    {
        return $this->maxWeight;
    }

    public function setWeight(int $weight)
    {
        if($this->state == 'load'){
            if($weight < $this->maxWeight && $weight >= 0) {
                return $this->weight = $weight;
            } elseif ($weight > $this->maxWeight){
                echo "Заданый вес груза превышает грузоподьомность: " . $this->freeSpace();
            }else
                echo "Не коректный ввод";
        }else
            echo "Переведите транспортное средство в режим погрузки: 'load'";
    }

    public function freeSpace(): int
    {
        return $this->maxWeight - $this->getWeight();
    }
    public function addWeight(int $newWeight)
    {
        if($this->state == 'load') {
            if ($newWeight <= $this->freeSpace()) {
                return $this->weight += $newWeight;
            } else
                echo "Нехватает свободного места";
        }else
            echo "Переведите транспортное средство в режим погрузки: 'load'";
    }
    public function unloadWeight(int $countWeight)
    {
        if ($this->state == 'unload') {
            if ($countWeight <= $this->getWeight()) {
                return $this->weight = ($this->weight - $countWeight);
            } else echo 'Не коректный ввод проверьте вес груза на транспортном средстве';
        } else
            echo "Переведите транспортное средство в режим выгрузки: 'unload'";
    }

}