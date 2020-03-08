<?php

function fullName($firstName, $lastName, $separate = ''){
    return "{$firstName}{$separate} {$lastName}";
}
$fullname = FullName('franck', 'alain', '_');
echo $fullname;

echo '<br>' . '<h1>Another way</h1>';

$fullname = function ($firstName, $lastName, $separate = ' '){
    return "{$firstName}{$separate}{$lastName}";
};
echo $fullname('Ange', 'Alain', '_' );