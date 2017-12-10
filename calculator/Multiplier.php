<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/11/17
 * Time: 12:04 AM
 */

class Multiplier implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result * $number;
    }

}