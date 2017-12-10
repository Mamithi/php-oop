<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/11/17
 * Time: 12:06 AM
 */

class Divider implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result / $number;
    }
}