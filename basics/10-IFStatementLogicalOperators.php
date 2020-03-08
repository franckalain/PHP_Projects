<?php
if (true && true){
    echo 'hello ' . '<br>';
}



$username = 'franck';
$password = 'manager';
if ($username == 'franck' && $password == 'manager'){
    echo 'you are in' . '<br>';
}


$dayOfWeek = 5;
if ($dayOfWeek == 5 || $dayOfWeek == 7){
    echo 'week is here' . '<br>';
}

$dayOfWeek = 7;
$workingTheWeekEnd = true;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekEnd ){
    echo 'you have a day off';
}