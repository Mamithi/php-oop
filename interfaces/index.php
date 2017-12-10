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

echo json_encode($c);