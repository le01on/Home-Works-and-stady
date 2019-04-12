<?php
require_once 'EmployeeInterface';
class Worker implements EmployeeInterface
{
    private $name;
    private $age;
    private $salary;
    private $position;
    private $startDay;

    public function __construct($name, $age, $startDay, $salary, $position)
    {
        $this->name = $name;
        $this->setAge($age);
        $this->position = $position;
        $this->setStartDay($startDay);
        $this->setSalary($salary);
    }

    public function setPosition($position)
    {
        if ($this->checkPosition($position)) {
            $this->position = $position;
        }
    }

    public function getPosition()
    {
        return $this->position; // TODO: Implement getPosition() method.
    }

    public function setStartDay($startDay): DateTimeInterface
    {
        $date = new DateTime($startDay);
        $date->format('Y-m-d');
        return $this->startDay = $date;
    }

    public function getStartDay(): DateTimeInterface
    {
        return $this->startDay; // TODO: Implement getStartDay() method.
    }

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
        $this->salary = $salary + ($salary * ($this->workTime() - 1) * 0.05);
    }

    public function getSalary() {
        return $this->salary;
    }

    private function checkAge($age) {
        if ($age >= 1 && $age < 100) {
            return true;
        } return false;
    }
    private function checkPosition($position) {
        if ($position == "worker" || $position == "manager") {
            return true;
        }
        return false;
    }

    public function workTime()
    {
        $nowDay = new DateTime('now');
        $interval = $this->startDay->diff($nowDay);
        return $interval->format('%Y');
    }
}
