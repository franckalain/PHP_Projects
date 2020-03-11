<?php
require 'Collection.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');
echo $c;
//$c->baz ='qux';
//echo $c->foo(' foo', 'bar', 'qux');
// echo $c->baz;
// echo $c->get('baz');
// echo '<pre>'. print_r($c->all(), true);
