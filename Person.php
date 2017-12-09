<?php

class Person{
    public $name;
    public $age;

    public function sentense(){
        return $this->name . ' is ' . $this->age . ' years old';
    }
}
