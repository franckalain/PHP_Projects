<?php
require 'Collection.php';
require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');
echo $c->jsonSerialize();
echo '<br>';
echo count($c);
echo json_encode($c);

echo '<br><br>';

$cat = new Cat();
$dog = new Dog();
echo $cat->talk();
echo '<br>';
echo $dog->talk();

