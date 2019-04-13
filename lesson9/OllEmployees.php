<?php
require_once 'EmployeeInterface';
require_once 'ManagerInterface';
require_once 'Worker.php';
require_once 'Manager';

$worker1 = new Worker('Федор', 30,"2010-05-23", 1500, 'worker');
$worker2 = new Worker('Андрей', 42, "2007-08-12", 2500, 'worker');
$worker3 = new Worker('Марина', 20, "2017-09-02", 900, 'worker');
$worker4 = new Worker('Кирил', 28, "2012-12-12", 1300,'worker');
$worker5 = new Worker('Виктор', 35, "2013-09-19", 1900, 'worker');
$worker6 = new Worker('Александр', 47, "2005-12-02", 2400, 'worker');

$manager1 = new Manager('Bob', 34, "2010-05-15",  'Manager');
$manager1->addEmployee($worker1);
$manager1->addEmployee($worker2);
$manager1->addEmployee($worker3);
$manager1->setSalary(2000);

$manager2 = new Manager('Robert', 28, "2017-06-30", 'Manager');
$manager2->addEmployee($worker6);
$manager2->addEmployee($worker5);
$manager2->addEmployee($worker4);
$manager2->setSalary(1800);

echo "Менеджер " . $manager1->getName() .  ", зарплата - " . $manager1->getSalary() . ". Вподчинении  человек: " . $manager1->getCountEmployees() . ".";
echo "<br>";
echo "Менеджер " . $manager2->getName() .  ", зарплата - " . $manager2->getSalary() . ". Вподчинении  человек: " . $manager2->getCountEmployees() . ".";
