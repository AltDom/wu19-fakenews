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

$titlesAndContent = [
    [
        'order' => 0,
        'title' => '\'My legs stayed stretched forever after a "ben sträcka"!\'',
        'contentFile' => '/article00.txt'
    ],
    [
        'order' => 1,
        'title' => 'Scientists discover flugsvampar improve coding ability before killing.',
        'contentFile' => '/article01.txt'
    ],
    [
        'order' => 2,
        'title' => '\'It\'s likely that I\'ll be impeached for all the terrible things I\'ve done!\'',
        'contentFile' => '/article02.txt'
    ],
    [
        'order' => 3,
        'title' => 'Rund Pingis suspected to be the number one cause of confusion when coding loops.',
        'contentFile' => '/article03.txt'
    ],
    [
        'order' => 4,
        'title' => 'Student trapped inside YRGO for the whole winter emerges as a notorious hacker.',
        'contentFile' => '/article04.txt'
    ],
    [
        'order' => 5,
        'title' => 'Vincent spends 8 months of paternity leave admiring this student\'s beautiful code.',
        'contentFile' => '/article05.txt'
    ],
    [
        'order' => 6,
        'title' => 'The owner of Gulan found to be utterly obsessed with the centre of eggs.',
        'contentFile' => '/article06.txt'
    ],
    [
        'order' => 7,
        'title' => '\'Prepare to be nollade!\' said this student before being nollade.',
        'contentFile' => '/article07.txt'
    ],
    [
        'order' => 8,
        'title' => 'Cyber-criminal\'s pseudonym "The Stretched Leg" traced back to WU19 student\'s IP Address.',
        'contentFile' => '/article08.txt'
    ],
    [
        'order' => 9,
        'title' => 'Git commits too heavily to pulling and decides to compensate a little with a push.',
        'contentFile' => '/article09.txt'
    ],
    [
        'order' => 10,
        'title' => '"SQL Murder Mystery" characters Jeremy Bowers & Miranda Priestly identified as frequent Nordic Wellness visitors.',
        'contentFile' => '/article10.txt'
    ],
    [
        'order' => 11,
        'title' => '\'"Surely that Aussie guy has no idea what\'s going on", I thought to myself.\'',
        'contentFile' => '/article11.txt'
    ],
    [
        'order' => 12,
        'title' => 'Ping pong ball\'s trajectory discovered to bounce more vertically off the red side of the paddle.',
        'contentFile' => '/article12.txt'
    ],
    [
        'order' => 13,
        'title' => 'Streaming tears quickly turn to fury after WU19 student loses ping pong match.',
        'contentFile' => '/article13.txt'
    ],
    [
        'order' => 14,
        'title' => 'WU19 Student\'s Fake News Feed found to be completely true.',
        'contentFile' => '/article14.txt'
    ],
    [
        'order' => 15,
        'title' => 'Glue in "implode" function found to be not very sticky.',
        'contentFile' => '/article15.txt'
    ]
];
$shuffledTAndC = shuffleArray($titlesAndContent);
$TAndCSample = [$shuffledTAndC[0],$shuffledTAndC[1],$shuffledTAndC[2],$shuffledTAndC[3],$shuffledTAndC[4],$shuffledTAndC[5],$shuffledTAndC[6],$shuffledTAndC[7],$shuffledTAndC[8],$shuffledTAndC[9]];
$TAndCOrders = orderArray($TAndCSample);

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
        'title' => $titlesAndContent[ $TAndCOrders[0] ]['title'],
        'content' => file_get_contents(__DIR__ . '/articles' . $titlesAndContent[ $TAndCOrders[0] ]['contentFile']),
        'author' => $authors[$ids[0]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[0] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[0]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[1] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[1] ]['contentFile']),
        'author' => $authors[$ids[1]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[1] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[1]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[2] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[2] ]['contentFile']),
        'author' => $authors[$ids[2]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[2] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[2]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[3] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[3] ]['contentFile']),
        'author' => $authors[$ids[3]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[3] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[3]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[4] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[4] ]['contentFile']),
        'author' => $authors[$ids[4]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[4] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[4]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[5] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[5] ]['contentFile']),
        'author' => $authors[$ids[5]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[5] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[5]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[6] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[6] ]['contentFile']),
        'author' => $authors[$ids[6]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[6] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[6]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[7] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[7] ]['contentFile']),
        'author' => $authors[$ids[7]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[7] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[7]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[8] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[8] ]['contentFile']),
        'author' => $authors[$ids[8]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[8] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[8]" . '.jpg'
    ],
    [
        'title' => $titlesAndContent[ $TAndCOrders[9] ]['title'],
        'content' => file_get_contents(__DIR__.'/articles'.$titlesAndContent[ $TAndCOrders[9] ]['contentFile']),
        'author' => $authors[$ids[9]-1]['full_name'],
        'published_date' => $dates[ $datesOrders[9] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => '/profiles' . "/$ids[9]" . '.jpg'
    ]
];
