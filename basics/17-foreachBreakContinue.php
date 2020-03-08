<?php

$users = [
    ['username' => 'alex'],
    ['username' => 'billy'],
    ['username' => 'dale'],
    ['username' => 'ashley'],
    ['username' => 'mable'],
    ['username' => 'josh']
];

$toFind= 'ashley';
$result = null;

foreach($users as $user){
    if($user['username'] === $toFind){
        $result = $user;
    break;
    }

}

var_dump($result);

echo '<h1>Continue</h1>';

$toSkip = 'dale';
foreach($users as $user){
    if($user['username'] === $toSkip){
        continue;
    }
    echo $user['username'] . '<br>';
}



echo '<h1>another users array</h1>';

$users = [
    [
        'username' => 'alex',
        'likes' => ['cats', 'food']
        ],

        [
        'username' => 'billy',
        'likes' => [ 'code', 'cats', 'dogs']
        ],
        [
            'username' => 'dale',
            'likes' => [ 'code', 'cats', 'music']
        ]
];

$finding = 'code';
$found = null;

foreach($users as $user){
    foreach($user['likes'] as $like){
        if($like === $finding){
            $found = $user;
        break 2;
        }
    }
}

var_dump($found);
