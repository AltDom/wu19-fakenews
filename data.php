<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

// A shuffled array of the numbers from 1-29, representing Author IDs
$ids = shuffleArray(range(1,29));

// An array of arrays with each author's ID and name. Remember the IDs have been randomised above
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

$articleID = shuffleArray(range(0,15));
// An array of arrays with each author's ID and name. Remember the IDs have been randomised above
$titlesAndContent = [
    [
        'order' => $articleID[0],
        'title' => '/title' . "$articleID[0]" . '.txt',
        'contentFile' => '/article' . "$articleID[0]" . '.txt'
    ],
    [
        'order' => $articleID[1],
        'title' => '/title' . "$articleID[1]" . '.txt',
        'contentFile' => '/article' . "$articleID[1]" . '.txt'
    ],
    [
        'order' => $articleID[2],
        'title' => '/title' . "$articleID[2]" . '.txt',
        'contentFile' => '/article' . "$articleID[2]" . '.txt'
    ],
    [
        'order' => $articleID[3],
        'title' => '/title' . "$articleID[3]" . '.txt',
        'contentFile' => '/article' . "$articleID[3]" . '.txt'
    ],
    [
        'order' => $articleID[4],
        'title' => '/title' . "$articleID[4]" . '.txt',
        'contentFile' => '/article' . "$articleID[4]" . '.txt'
    ],
    [
        'order' => $articleID[5],
        'title' => '/title' . "$articleID[5]" . '.txt',
        'contentFile' => '/article' . "$articleID[5]" . '.txt'
    ],
    [
        'order' => $articleID[6],
        'title' => '/title' . "$articleID[6]" . '.txt',
        'contentFile' => '/article' . "$articleID[6]" . '.txt'
    ],
    [
        'order' => $articleID[7],
        'title' => '/title' . "$articleID[7]" . '.txt',
        'contentFile' => '/article' . "$articleID[7]" . '.txt'
    ],
    [
        'order' => $articleID[8],
        'title' => '/title' . "$articleID[8]" . '.txt',
        'contentFile' => '/article' . "$articleID[8]" . '.txt'
    ],
    [
        'order' => $articleID[9],
        'title' => '/title' . "$articleID[9]" . '.txt',
        'contentFile' => '/article' . "$articleID[9]" . '.txt'
    ],
    [
        'order' => $articleID[10],
        'title' => '/title' . "$articleID[10]" . '.txt',
        'contentFile' => '/article' . "$articleID[10]" . '.txt'
    ],
    [
        'order' => $articleID[11],
        'title' => '/title' . "$articleID[11]" . '.txt',
        'contentFile' => '/article' . "$articleID[11]" . '.txt'
    ],
    [
        'order' => $articleID[12],
        'title' => '/title' . "$articleID[12]" . '.txt',
        'contentFile' => '/article' . "$articleID[12]" . '.txt'
    ],
    [
        'order' => $articleID[13],
        'title' => '/title' . "$articleID[13]" . '.txt',
        'contentFile' => '/article' . "$articleID[13]" . '.txt'
    ],
    [
        'order' => $articleID[14],
        'title' => '/title' . "$articleID[14]" . '.txt',
        'contentFile' => '/article' . "$articleID[14]" . '.txt'
    ],
    [
        'order' => $articleID[15],
        'title' => '/title' . "$articleID[15]" . '.txt',
        'contentFile' => '/article' . "$articleID[15]" . '.txt'
    ]
];
// $shuffledTAndC = shuffleArray($titlesAndContent);
// $TAndCSample = [$shuffledTAndC[0],$shuffledTAndC[1],$shuffledTAndC[2],$shuffledTAndC[3],$shuffledTAndC[4],$shuffledTAndC[5],$shuffledTAndC[6],$shuffledTAndC[7],$shuffledTAndC[8],$shuffledTAndC[9]];
// $TAndCOrders = orderArray($TAndCSample);

$dates = [
    [
        'order' => 0,
        'date' => 'The End of Time'
    ],
    [
        'order' => 1,
        'date' => 'Snack-o-Clock'
    ],
    [
        'order' => 2,
        'date' => '25 December 2086'
    ],
    [
        'order' => 3,
        'date' => 'Lunchtime'
    ],
    [
        'order' => 4,
        'date' => '1 November 2019'
    ],
    [
        'order' => 5,
        'date' => 'Yesterday'
    ],
    [
        'order' => 6,
        'date' => 'Last Week'
    ],
    [
        'order' => 7,
        'date' => '4 July 2019'
    ],
    [
        'order' => 8,
        'date' => '12 January 2019'
    ],
    [
        'order' => 9,
        'date' => 'During an Awkward Silence'
    ],
    [
        'order' => 10,
        'date' => '17 June 2018'
    ],
    [
        'order' => 11,
        'date' => '26 April 2014'
    ],
    [
        'order' => 12,
        'date' => '29 February 2000'
    ],
    [
        'order' => 13,
        'date' => '6 May 1990'
    ],
    [
        'order' => 14,
        'date' => '14 May 1987'
    ],
    [
        'order' => 15,
        'date' => '500 AD'
    ],
    [
        'order' => 16,
        'date' => '300 BC'
    ],
    [
        'order' => 17,
        'date' => 'The Dawn of Man'
    ],
    [
        'order' => 18,
        'date' => 'In The Beginning'
    ]
];
$shuffledDates = shuffleArray($dates);
$datesSample = [$shuffledDates[0],$shuffledDates[1],$shuffledDates[2],$shuffledDates[3],$shuffledDates[4],$shuffledDates[5],$shuffledDates[6],$shuffledDates[7],$shuffledDates[8],$shuffledDates[9]];
$datesOrders = orderArray($datesSample);


$articles = [
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[0] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[0] ]['contentFile']),
        'author' => $authors[$ids[0]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[0] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[0]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[1] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[1] ]['contentFile']),
        'author' => $authors[$ids[1]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[1] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[1]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[2] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[2] ]['contentFile']),
        'author' => $authors[$ids[2]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[2] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[2]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[3] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[3] ]['contentFile']),
        'author' => $authors[$ids[3]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[3] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[3]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[4] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[4] ]['contentFile']),
        'author' => $authors[$ids[4]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[4] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[4]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[5] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[5] ]['contentFile']),
        'author' => $authors[$ids[5]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[5] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[5]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[6] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[6] ]['contentFile']),
        'author' => $authors[$ids[6]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[6] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[6]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[7] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[7] ]['contentFile']),
        'author' => $authors[$ids[7]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[7] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[7]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[8] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[8] ]['contentFile']),
        'author' => $authors[$ids[8]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[8] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[8]" . '.jpg'
    ],
    [
        'title' => file_get_contents(__DIR__ . '/titles' . $titlesAndContent[ $articleID[9] ]['title']),
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $articleID[9] ]['contentFile']),
        'author' => $authors[$ids[9]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[9] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[9]" . '.jpg'
    ]
];
