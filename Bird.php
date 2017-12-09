<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/9/17
 * Time: 11:15 PM
 */

class Bird
{
    protected $can_fly;
    protected $leg_count;

    public function __construct($can_fly, $leg_count)
    {
        $this->can_fly = $can_fly;
        $this->leg_count = $leg_count;
    }

    public function getCanFly(){
        return $this->can_fly;
    }

    public function getLegCount(){
        return $this->leg_count;
    }
}