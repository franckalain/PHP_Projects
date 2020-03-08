<?php
$people = [
    'alex' => 20,
    'billy' => 21
];

echo $people['alex'];

echo '<br>';

$users = [
    [
        'username' => 'alex',
        'email' => 'alex@gmail.com',
        'likes' => ['cats', 'foods']
    ],
    [
        'username' => 'billy',
        'email' => 'billy@gmail.com',
        'likes' => ['books', 'cats']
    ]
];
echo '<pre>', var_dump($users), '</pre>';
echo $users[0]['username'];
echo '<br>';
echo $users[1]['email'];
echo '<br>';
echo $users[0]['likes'][1];
echo '<br>';
foreach($users as $user){
    echo $user['username'] . '<br>';
}

echo '<br>';
$users[] = [
    'username' => 'josh',
    'email' => 'josh@gmail.com',
    'likes' => ['beer', 'fruits']
];

echo '<pre>', var_dump($users), '</pre';

echo '<br>';
echo $users[2]['likes'][0];

echo '<br>';
$users[1]['likes'][1] = 'dogs';

echo '<pre>', var_dump($users), '</pre>';

echo '<br>';

$users[1]['about'] = 'I am learning php';


echo '<pre>', var_dump($users), '</pre>';