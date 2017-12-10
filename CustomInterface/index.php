<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 8:44 AM
 */

require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$dog = new Dog();
$cat = new Cat();

echo $dog->talk() . '<br>';

echo $cat->talk();