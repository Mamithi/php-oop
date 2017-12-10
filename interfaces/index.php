<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 8:34 AM
 */

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

$c->baz = 'qux';

echo $c;

//echo $c->foo('foo', 'bar', 'baz', 'qux');

//echo '<pre>' . print_r($c->all(), TRUE);