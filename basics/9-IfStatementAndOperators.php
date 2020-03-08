<?php
$dayOfWeek = 3;

$daysOfWeek = [
    1 => 'monday',
    2 => 'tuesday',
    3 => 'wednesday'
];

if (in_array($dayOfWeek, array_keys($daysOfWeek))){
    echo $daysOfWeek[$dayOfWeek];
} else {
    echo 'that is not a valid day';
}

echo '<br>';

echo '<h1>Nesting if statement</h1>';

$name = 'Kouadio Konan Alain Franck';

if ($name){
    echo 'your name is ' . $name;

    if (strlen($name) > 10){
        echo ' and you have a very long name';
    }
}

echo '<br>';
$name = 'Franck';

if (!$name){
    return;
}
echo 'your name is ' . $name . '<br>';

if (strlen($name) > 10){
    echo 'oh you have a very long name' . '<br>';
}

if (true){
    echo 'this will always be run' . '<br>';
}

if (1){
    echo 'this will always be run' . '<br>';
}

if (false){
    echo 'this will always be run' . '<br>';
}

if (0){
    echo 'nothithis will always be runng';
}