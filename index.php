<?php
require 'Person.php';

$person = new Person;

$person->name = 'John';
$person->age = 20;


echo $person->sentense();

# Objects
//$object = new stdClass;
//$object->names = ['John', 'Billy', 'Susan', 'Max'];
//
//foreach($object->names as $name){
//    echo $name . '<br>';
//}

