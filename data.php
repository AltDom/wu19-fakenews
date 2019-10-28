<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

$ids = range(1,29);
$ids = shuffleArray($ids);
$authors = [
    [
        'id' => $ids[0],
        'full_name' => 'Alexander Gustafsson Flink'
    ],
    [
        'id' => $ids[1],
        'full_name' => 'André Chamoun'
    ],
    [
        'id' => $ids[2],
        'full_name' => 'Andreas Lindberg'
    ],
    [
        'id' => $ids[3],
        'full_name' => 'Andreas Pandzic'
    ],
    [
        'id' => $ids[4],
        'full_name' => 'Bernhard Stedt'
    ],
    [
        'id' => $ids[5],
        'full_name' => 'Betsy Alva Soplin'
    ],
    [
        'id' => $ids[6],
        'full_name' => 'Camilla Kylmänen Sjörén'
    ],
    [
        'id' => $ids[7],
        'full_name' => 'Daniel Thorsen'
    ],
    [
        'id' => $ids[8],
        'full_name' => 'Dominic Kersch'
    ],
    [
        'id' => $ids[9],
        'full_name' => 'Emelie Petersson'
    ],
    [
        'id' => $ids[10],
        'full_name' => 'Erik Johannesson'
    ],
    [
        'id' => $ids[11],
        'full_name' => 'Henric Björkvall'
    ],
    [
        'id' => $ids[12],
        'full_name' => 'Jakob Fridmar'
    ],
    [
        'id' => $ids[13],
        'full_name' => 'Jesper Lundqvist'
    ],
    [
        'id' => $ids[14],
        'full_name' => 'Julia Karlsson'
    ],
    [
        'id' => $ids[15],
        'full_name' => 'Karl-Johan Lundholm'
    ],
    [
        'id' => $ids[16],
        'full_name' => 'Maja Alin'
    ],
    [
        'id' => $ids[17],
        'full_name' => 'Marcus Augustsson'
    ],
    [
        'id' => $ids[18],
        'full_name' => 'Mark Dela Cruz'
    ],
    [
        'id' => $ids[19],
        'full_name' => 'Michaela Lundborg'
    ],
    [
        'id' => $ids[20],
        'full_name' => 'Mikaela Lundsgård'
    ],
    [
        'id' => $ids[21],
        'full_name' => 'Oskar Sjölin Joss'
    ],
    [
        'id' => $ids[22],
        'full_name' => 'Oskar Turesson'
    ],
    [
        'id' => $ids[23],
        'full_name' => 'Terese Thulin'
    ],
    [
        'id' => $ids[24],
        'full_name' => 'Thomas Sönnerstam Longa'
    ],
    [
        'id' => $ids[25],
        'full_name' => 'Victor Ljungblad'
    ],
    [
        'id' => $ids[26],
        'full_name' => 'Viktor Puke'
    ],
    [
        'id' => $ids[27],
        'full_name' => 'Viktor Sjöblom'
    ],
    [
        'id' => $ids[28],
        'full_name' => 'Donald Trump'
    ]
];

$titles = [
    '\'I\'ve come up with a new Ping Pong game! I\'m going to be very rich!\'',
    '\'I ate a flugsvamp and I became invisible.\'',
    '\'I\'m a pretty big deal.\'',
    'The Matrix',
    'Transformers',
    'To Kill a Mockingbird',
    'Death by Ping Pong',
    'The Lion, the Witch and the Wardrobe',
    'Veal',
    'Joker',
    'Boy Safari'
];
$titles = shuffleArray($titles);

$dates = [
    [
        'order' => 0,
        'date' => '1 November 2019'
    ],
    [
        'order' => 1,
        'date' => 'The End of Time'
    ],
    [
        'order' => 2,
        'date' => 'Snack-o-Clock'
    ],
    [
        'order' => 3,
        'date' => 'Lunchtime'
    ],
    [
        'order' => 4,
        'date' => '12 January 2019'
    ],
    [
        'order' => 5,
        'date' => '14 May 1987'
    ],
    [
        'order' => 6,
        'date' => '25 December 2086'
    ],
    [
        'order' => 7,
        'date' => 'During an Awkward Silence'
    ],
    [
        'order' => 8,
        'date' => '17 June 2018'
    ],
    [
        'order' => 9,
        'date' => '4 July 2019'
    ],
    [
        'order' => 10,
        'date' => '26 April 2014'
    ],
    [
        'order' => 11,
        'date' => 'Yesterday'
    ],
    [
        'order' => 12,
        'date' => '500 AD'
    ],
    [
        'order' => 13,
        'date' => '300 BC'
    ],
    [
        'order' => 14,
        'date' => 'The Dawn of Man'
    ],
    [
        'order' => 15,
        'date' => 'In The Beginning'
    ],
    [
        'order' => 16,
        'date' => 'Last Week'
    ],
    [
        'order' => 17,
        'date' => '6 May 1990'
    ],
    [
        'order' => 18,
        'date' => '29 February 2000'
    ]
];
$shuffledDates = shuffleArray($dates);
$datesSample = [$shuffledDates[0],$shuffledDates[1],$shuffledDates[2],$shuffledDates[3],$shuffledDates[4],$shuffledDates[5],$shuffledDates[6],$shuffledDates[7],$shuffledDates[8],$shuffledDates[9]];
$datesOrders = orderArray($datesSample);


$articles = [
    [
        'title' => $titles[0],
        'content' => file_get_contents(__DIR__.'/articles/article01.txt'),
        'author' => $authors[$ids[0]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[0] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[0]" . '.jpg'
    ],
    [
        'title' => "$titles[1]",
        'content' => file_get_contents(__DIR__.'/articles/article02.txt'),
        'author' => $authors[$ids[1]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[1] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[1]" . '.jpg'
    ],
    [
        'title' => "$titles[2]",
        'content' => file_get_contents(__DIR__.'/articles/article03.txt'),
        'author' => $authors[$ids[2]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[2] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[2]" . '.jpg'
    ],
    [
        'title' => "$titles[3]",
        'content' => file_get_contents(__DIR__.'/articles/article04.txt'),
        'author' => $authors[$ids[3]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[3] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[3]" . '.jpg'
    ],
    [
        'title' => "$titles[4]",
        'content' => file_get_contents(__DIR__.'/articles/article05.txt'),
        'author' => $authors[$ids[4]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[4] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[4]" . '.jpg'
    ],
    [
        'title' => "$titles[5]",
        'content' => file_get_contents(__DIR__.'/articles/article06.txt'),
        'author' => $authors[$ids[5]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[5] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[5]" . '.jpg'
    ],
    [
        'title' => "$titles[6]",
        'content' => file_get_contents(__DIR__.'/articles/article07.txt'),
        'author' => $authors[$ids[6]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[6] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[6]" . '.jpg'
    ],
    [
        'title' => "$titles[7]",
        'content' => file_get_contents(__DIR__.'/articles/article08.txt'),
        'author' => $authors[$ids[7]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[7] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[7]" . '.jpg'
    ],
    [
        'title' => "$titles[8]",
        'content' => file_get_contents(__DIR__.'/articles/article09.txt'),
        'author' => $authors[$ids[8]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[8] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[8]" . '.jpg'
    ],
    [
        'title' => "$titles[9]",
        'content' => file_get_contents(__DIR__.'/articles/article10.txt'),
        'author' => $authors[$ids[9]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[9] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[9]" . '.jpg'
    ]
];
