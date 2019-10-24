<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$articles = [
    [
        'title' => 'TITLE1',
        'content' => file_get_contents(__DIR__.'/articles/article01.txt'),
        'author' => 'AUTHOR1',
        'published_date' => '15 November 2019',
        'like_counter' => 123
    ],
    [
        'title' => 'TITLE2',
        'content' => file_get_contents(__DIR__.'/articles/article02.txt'),
        'author' => 'AUTHOR2',
        'published_date' => '15 November 2019',
        'like_counter' => 234,
        'articleImage' => 'url1'
    ],
    [
        'title' => 'TITLE3',
        'content' => file_get_contents(__DIR__.'/articles/article03.txt'),
        'author' => 'AUTHOR3',
        'published_date' => '15 November 2019',
        'like_counter' => 345
    ],
    [
        'title' => 'TITLE4',
        'content' => file_get_contents(__DIR__.'/articles/article04.txt'),
        'author' => 'AUTHOR4',
        'published_date' => '15 November 2019',
        'like_counter' => 456
    ],
    [
        'title' => 'TITLE5',
        'content' => file_get_contents(__DIR__.'/articles/article05.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ],
    [
        'title' => 'TITLE6',
        'content' => file_get_contents(__DIR__.'/articles/article06.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ],
    [
        'title' => 'TITLE7',
        'content' => file_get_contents(__DIR__.'/articles/article07.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ],
    [
        'title' => 'TITLE8',
        'content' => file_get_contents(__DIR__.'/articles/article08.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ],
    [
        'title' => 'TITLE9',
        'content' => file_get_contents(__DIR__.'/articles/article09.txt'),
        'author' => 'AUTHOR5',
        'published_date' => '15 November 2019',
        'like_counter' => 567
    ],
    [
        'title' => 'TITLE10',
        'content' => file_get_contents(__DIR__.'/articles/article10.txt'),
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