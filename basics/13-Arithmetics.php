<?php
echo '<h1>Incrementattion</h1>';
$views = 0;

$views = $views + 1;

echo $views . '<br>';


$likes = 0;
$likes++;
$likes++;
$likes++;
echo $likes;


echo '<h1>Percentage</h1>';

$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = number_format(($completedLessons / $totalLessons) * 100, 2);


echo "you have completed {$percentageComplete} % of this course" . '<br>';

echo '<h1>Substraction</h1>';

$balance = 500;
$cost = 200;

echo $balance = $balance - $cost . '<br>';

echo '<h1>Incrementattion</h1>';
$point = 0;
$point += 10;

echo $point;

echo '<h1>Modulo</h1>';
$a = 10;
$b = 8;

echo $a % $b;

echo '<h1> Even and odd </h1>';

$row = 10;
for ($row = 1; $row <= 10; $row ++){
    if ($row % 2 === 0){
        echo 'even' . '<br>';
    } else {
        echo 'odd' . '<br>';
    }

}

echo '<h1>Exponential</h1>';

$a = 10;
echo $a **2;