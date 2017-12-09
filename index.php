<?php

require 'Bird.php';
require 'Pegion.php';
require 'Penguin.php';

$pegion = new Pegion(true, 2);
$penguin = new Penguin(false, 4);

if($pegion->getCanFly()){
    echo 'Pegion can fly <br>';
}

if(!$penguin->getCanFly()){
    echo 'Penguin cant fly <br>';
}