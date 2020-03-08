<?php
function fullName($firstName, $lastName = null, $separate = ''){
    if(trim($firstName === '')){
        return;
    }

    if($lastName === null){
        return $firstName;
    }

    return "{$firstName}{$separate}{$lastName}";
}

echo (fullName('ange', 'alain', ' '));