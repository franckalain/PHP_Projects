<?php

$topics =
[
    [
    'id' => 1,
    'title' => 'the best way to learn PHP',
    'posts' =>[
            ['body' => 'practice a lot'],
            ['body' => 'work on a project'],
             ]
    ],
    [
        'id' => 2,
        'title' => 'how do I use foreach loop',
        'posts' =>[
                ['body' => 'just watch this']
                 ]
        ]
   
];

foreach($topics as $topic){
    echo '<h1>' . $topic['title'] . '</h1>';

    foreach($topic['posts'] as $post){
        echo  $post['body'] . '<br>';
    }
}