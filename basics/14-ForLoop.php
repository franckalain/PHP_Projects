<?php

for ($x = 1; $x <= 10; $x++){
    echo $x . '<br>';
}

echo '<h1>Count items per page </h1>';

$totalItems = 210;
$ItemsPerPage = 25;
$pageCount = ceil($totalItems / $ItemsPerPage);

if ($pageCount > 1){
for ($i = 1; $i <= $pageCount; $i++){
    echo '<a href="?page=' . $i . '">' . $i .'</a> ';
}
}

echo '<h1>for loop count items in array </h1>';

$names = ['alex', 'smith', 'ange', 'paule'];
for ($i = 0; $i < count($names); $i++){
    echo $names[$i] .'<br>';
}