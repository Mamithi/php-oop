<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 11:50 PM
 */

class Subtractor implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result - $number;
    }
}