<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 11:48 PM
 */

class Adder implements OperatorInterface
{
    public function run($number, $result){
        return $result + $number;
    }
}