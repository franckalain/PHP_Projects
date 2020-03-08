<?php
$uploaded = true;

if ($uploaded === true){
    echo 'uploaded' . '<br>';
}

$tableAvailable = false;

if ($tableAvailable !== true){
    echo 'no tables available' . '<br>';
}


$tableAvailable = true;

if ($tableAvailable === true){
    echo 'tables available' . '<br>';
}


$roomsRequested = 4;
$roomsAvailable = 3;

if ($roomsRequested > $roomsAvailable){
    echo 'sorry not enough rooms' . '<br>';
}

$maxRoomsAllowed = 5;
$roomsRequested = 2;
$roomsAvailable = 20;

if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)){
    echo 'please choose less room';
} else {
    echo 'your booking is complete' . '<br>';
}


$maxRoomsAllowed = 5;
$roomsRequested = 7;
$roomsAvailable = 20;

if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)){
    echo 'please choose less room';
} else {
    echo 'your booking is complete';
}