<?php

class Worker {
    private $name;
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
    private function checkAge($age) {
        if ($age >= 1 && $age < 100) {
            return $this->age = $age;
        }
    }
}
$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker1->setAge(25);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo "Сумма зарплат Ивана и Васи равна - " . ($worker1->getSalary() + $worker2->getSalary()) . " долларов." . "<br>";
echo "Сумма возрастов Ивана и Васи равна - " . ($worker1->getAge() + $worker2->getAge()) .  " лет.";
