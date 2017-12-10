<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 11:44 PM
 */

require_once 'Calculator.php';
require_once 'OperatorInterface.php';
require_once 'Adder.php';
require_once 'Subtractor.php';
require_once 'Multiplier.php';
require_once 'Divider.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(10, 50);  # 60

$c->setOperation(new Subtractor);
$c->calculate(30);  # 30

$c->setOperation(new Multiplier);
$c->calculate(5); # 150

$c->setOperation(new Divider);
$c->calculate(2); # 75

echo $c->getResult();