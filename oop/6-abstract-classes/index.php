<?php
require 'Foo.php';
require 'Bar.php';

$bar = new Bar();
echo $bar->bar()  . '<br>';
echo $bar->foobar();