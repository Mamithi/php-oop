<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/9/17
 * Time: 11:46 PM
 */

class Chest
{
    protected $lock;
    protected $is_closed;

    public function __construct(Lock $lock)
    {
        $this->lock = $lock;
    }

    public function close($lock = TRUE)
    {
        if ($lock === TRUE) {
            $this->lock->lock();
        }

        $this->is_closed = TRUE;
        echo 'Closed';
    }

    public function open()
    {
        if ($this->lock->isLocked()) {
            $this->lock->unlock();
        }

        $this->is_closed = FALSE;
        echo 'Opened';
    }

    public function isClosed()
    {
        return $this->is_closed;
    }
}