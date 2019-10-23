<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$articles = [
    [
        'title' => 'TITLE1',
        'content' => file_get_contents(__DIR__.'/articleContent/01.txt'),
        'author' => 'AUTHOR1',
        'published_date' => '15 November 2019',
        'like_counter' => 123
    ],
    [
        'title' => 'TITLE2',
        'content' => file_get_contents(__DIR__.'/articleContent/02.txt'),
        'author' => 'AUTHOR2',
        'published_date' => '15 November 2019',
        'like_counter' => 234
    ],
    [
        'title' => 'TITLE3',
        'content' => file_get_contents(__DIR__.'/articleContent/03.txt'),
        'author' => 'AUTHOR3',
        'published_date' => '15 November 2019',
        'like_counter' => 345
    ],
    [
        'title' => 'TITLE4',
        'content' => file_get_contents(__DIR__.'/articleContent/04.txt'),
        'author' => 'AUTHOR4',
        'published_date' => '15 November 2019',
        'like_counter' => 456
    ],
    [
        'title' => 'TITLE5',
        'content' => file_get_contents(__DIR__.'/articleContent/05.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ]
];

$authors = [
    [
        'id' => 1,
        'full_name' => 'FULLNAME1',
        'alias' => 'ALIAS1'
    ],
    [
        'id' => 2,
        'full_name' => 'FULLNAME2',
        'alias' => 'ALIAS2'
    ],
    [
        'id' => 3,
        'full_name' => 'FULLNAME3',
        'alias' => 'ALIAS3'
    ],
    [
        'id' => 4,
        'full_name' => 'FULLNAME4',
        'alias' => 'ALIAS4'
    ],
    [
        'id' => 5,
        'full_name' => 'FULLNAME5',
        'alias' => 'ALIAS5'
    ]
];