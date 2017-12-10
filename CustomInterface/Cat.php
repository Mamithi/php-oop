<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 8:47 AM
 */

class Cat implements TalkInterface
{
    public function talk()
    {
        return 'Meow';
    }
}