<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 9:23 AM
 */

class Bar extends Foo
{
    public function baz(){
        return 'qux';
    }

    public function foobar()
    {
        return 'barqux';
    }
}