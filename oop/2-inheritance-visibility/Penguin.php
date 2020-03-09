<?php
require 'Bird.php';
class Penguin extends Bird{
    public function foo(){
        echo $this->legCount;
    }
}

$penguin = new Bird(true, 2);
echo $penguin->canFly() . '<br>';

$penguin2 = new Penguin(true, 2);
echo $penguin2->foo() . '<br>';

echo $penguin2->legCount;