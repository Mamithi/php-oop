<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/11/17
 * Time: 12:10 AM
 */

spl_autoload_register(function ($class){
    require_once "{$class}.php";
});