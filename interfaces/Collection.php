<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 8:34 AM
 */

class Collection implements Countable, JsonSerializable
{
    protected $items = [];

    public function add($value)
    {
        $this->items[] = $value;
    }

    public function set($key, $value)
    {
        $this->items[$key] = $value;
    }

    public function jsonSerialize()
    {
        return json_encode($this->items);
    }

    public function count()
    {
        return count($this->items);
    }
}