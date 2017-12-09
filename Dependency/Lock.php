<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/9/17
 * Time: 11:46 PM
 */

class Lock
{
    protected $is_locked;

    public function lock()
    {
        $this->is_locked = TRUE;
    }


    public function unlock()
    {
        $this->is_locked = FALSE;
    }

    public function isLocked()
    {
        return $this->is_locked;
    }
}