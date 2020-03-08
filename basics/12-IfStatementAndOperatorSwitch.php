<?php

switch (1){
    case 1:
        echo 'the one' . '<br>';
    break;

    case 2:
        echo 'the two' . '<br>';
    break;
    default:
    echo 'unknown' . '<br>';
}


$weather = 'cloudy';
$color = null;
switch(true){
    case $weather == 'sunny':
        $color = 'blue';
    break;

    case $weather == 'cloudy':
        $color = 'grey';
    break;

}

echo $color;