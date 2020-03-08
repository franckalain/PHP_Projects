<?php

$config = [
    'separate' => '_'
];

function fullName($firstName, $lastName){
    global $config;
    return "{$firstName}{$config['separate']}{$lastName}";
}
echo fullName('ange', 'alain', '_');


echo '<br>' . 'or' . '<br>';
$fullName = function($firstName, $lastName) use($config){
    global $config;
    return "{$firstName}{$config['separate']}{$lastName}";
};
echo $fullName('ange', 'alain');