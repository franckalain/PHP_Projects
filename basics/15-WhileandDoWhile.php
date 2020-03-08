<?php
$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while($currentNumber <= $endAt){
    echo $currentNumber . '<br>';
    $currentNumber += $incrementBy;
    
}

echo '<h1>Rand number</h1>';

$numberIwant = 3;

while(($diceRolle = rand(1, 6)) !== $numberIwant){
    echo "you rolles {$diceRolle}, we need {$numberIwant} " . "<br>";
}


echo '<h1>do while</h>' . '<br>';


do {
    echo 'this will always work';
}
while(false);