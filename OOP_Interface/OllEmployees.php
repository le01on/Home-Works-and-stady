<?php
require_once 'EmployeeInterface';
require_once 'ManagerInterface';
require_once 'Worker';
require_once 'Manager';

$worker1 = new Worker('Федор', 30, new DateTime("2010-05-23"), 1500, 'worker');
$worker2 = new Worker('Андрей', 42, new DateTime("2007-08-12"), 2500, 'worker');
$worker3 = new Worker('Марина', 20, new DateTime("2017-09-02"), 900, 'worker');
$worker4 = new Worker('Кирил', 28, new DateTime("2012-12-12"), 1300,'worker');
$worker5 = new Worker('Виктор', 35, new DateTime("2013-09-19"), 1900, 'worker');
$worker6 = new Worker('Александр', 47,new DateTime( "2005-12-02"), 2400, 'worker');

$manager1 = new Manager('Bob', 34, new DateTime("2010-05-15"),  2000, 'Manager');
$manager1->addEmployee($worker1);
$manager1->addEmployee($worker2);
$manager1->addEmployee($worker3);

$manager2 = new Manager('Robert', 28, new DateTime("2017-06-30"), 1800, 'Manager');
$manager2->addEmployee($worker6);
$manager2->addEmployee($worker5);
$manager2->addEmployee($worker4);

echo "Менеджер " . $manager1->getName() .  ", зарплата - " . $manager1->getSalary() . ". Вподчинении  человек: " . $manager1->getCountEmployees() . ".";
echo "<br>";
echo "Менеджер " . $manager2->getName() .  ", зарплата - " . $manager2->getSalary() . ". Вподчинении  человек: " . $manager2->getCountEmployees() . ".";


