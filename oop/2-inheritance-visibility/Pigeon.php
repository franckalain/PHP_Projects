<?php
require 'Bird.php';
class Pigeon extends Bird{
    
}

$pigeon = new Bird(true, 2);

echo $pigeon->canFly();


if ($pigeon->canFly()){
    echo 'can fly';
}