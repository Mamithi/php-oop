<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 11:44 PM
 */

class Calculator
{
    protected $result;
    protected $operation;

    public function setOperation(OperatorInterface $operation)
    {
        $this->operation = $operation;
    }

    public function calculate()
    {
        foreach (func_get_args() as $number) {
            $this->result = $this->operation->run($number, $this->result);
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}