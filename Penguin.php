<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/9/17
 * Time: 11:31 PM
 */

class Penguin extends Bird
{
    public function foo()
    {
        echo $this->leg_count;
    }
}