<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

// The IDs array is used to randomly select an author and their image (as a paired item).
$ids = shuffleArray(range(0,28));
// Authors array. Each array element has an author name & extension to that same author's image.
$authors = [
    [
        'full_name' => 'Alexander Gustafsson Flink',
        'image' => '/profiles/0.jpg'
    ],
    [
        'full_name' => 'André Chamoun',
        'image' => '/profiles/1.jpg'
    ],
    [
        'full_name' => 'Andreas Lindberg',
        'image' => '/profiles/2.jpg'
    ],
    [
        'full_name' => 'Andreas Pandzic',
        'image' => '/profiles/3.jpg'
    ],
    [
        'full_name' => 'Bernhard Stedt',
        'image' => '/profiles/4.jpg'
    ],
    [
        'full_name' => 'Betsy Alva Soplin',
        'image' => '/profiles/5.jpg'
    ],
    [
        'full_name' => 'Camilla Kylmänen Sjörén',
        'image' => '/profiles/6.jpg'
    ],
    [
        'full_name' => 'Daniel Thorsen',
        'image' => '/profiles/7.jpg'
    ],
    [
        'full_name' => 'Dominic Kersch',
        'image' => '/profiles/8.jpg'
    ],
    [
        'full_name' => 'Emelie Petersson',
        'image' => '/profiles/9.jpg'
    ],
    [
        'full_name' => 'Erik Johannesson',
        'image' => '/profiles/10.jpg'
    ],
    [
        'full_name' => 'Henric Björkvall',
        'image' => '/profiles/11.jpg'
    ],
    [
        'full_name' => 'Jakob Fridmar',
        'image' => '/profiles/12.jpg'
    ],
    [
        'full_name' => 'Jesper Lundqvist',
        'image' => '/profiles/13.jpg'
    ],
    [
        'full_name' => 'Julia Karlsson',
        'image' => '/profiles/14.jpg'
    ],
    [
        'full_name' => 'Karl-Johan Lundholm',
        'image' => '/profiles/15.jpg'
    ],
    [
        'full_name' => 'Maja Alin',
        'image' => '/profiles/16.jpg'
    ],
    [
        'full_name' => 'Marcus Augustsson',
        'image' => '/profiles/17.jpg'
    ],
    [
        'full_name' => 'Mark Dela Cruz',
        'image' => '/profiles/18.jpg'
    ],
    [
        'full_name' => 'Michaela Lundborg',
        'image' => '/profiles/19.jpg'
    ],
    [
        'full_name' => 'Mikaela Lundsgård',
        'image' => '/profiles/20.jpg'
    ],
    [
        'full_name' => 'Oskar Sjölin Joss',
        'image' => '/profiles/21.jpg'
    ],
    [
        'full_name' => 'Oskar Turesson',
        'image' => '/profiles/22.jpg'
    ],
    [
        'full_name' => 'Terese Thulin',
        'image' => '/profiles/23.jpg'
    ],
    [
        'full_name' => 'Thomas Sönnerstam Longa',
        'image' => '/profiles/24.jpg'
    ],
    [
        'full_name' => 'Victor Ljungblad',
        'image' => '/profiles/25.jpg'
    ],
    [
        'full_name' => 'Viktor Puke',
        'image' => '/profiles/26.jpg'
    ],
    [
        'full_name' => 'Viktor Sjöblom',
        'image' => '/profiles/27.jpg'
    ],
    [
        'full_name' => 'Donald Trump',
        'image' => '/profiles/28.jpg'
    ]
];

// The articleIDs array is used to randomly select the titles and contents.
$articleID = shuffleArray(range(0,15));
// Titles and Content array. Each array element has extensions to title and content .txt files.
$titlesAndContent = [
    [
        'title' => '/titles/0.txt',
        'contentFile' => '/articles/0.txt'
    ],
    [
        'title' => '/titles/1.txt',
        'contentFile' => '/articles/1.txt'
    ],
    [
        'title' => '/titles/2.txt',
        'contentFile' => '/articles/2.txt'
    ],
    [
        'title' => '/titles/3.txt',
        'contentFile' => '/articles/3.txt'
    ],
    [
        'title' => '/titles/4.txt',
        'contentFile' => '/articles/4.txt'
    ],
    [
        'title' => '/titles/5.txt',
        'contentFile' => '/articles/5.txt'
    ],
    [
        'title' => '/titles/6.txt',
        'contentFile' => '/articles/6.txt'
    ],
    [
        'title' => '/titles/7.txt',
        'contentFile' => '/articles/7.txt'
    ],
    [
        'title' => '/titles/8.txt',
        'contentFile' => '/articles/8.txt'
    ],
    [
        'title' => '/titles/9.txt',
        'contentFile' => '/articles/9.txt'
    ],
    [
        'title' => '/titles/10.txt',
        'contentFile' => '/articles/10.txt'
    ],
    [
        'title' => '/titles/11.txt',
        'contentFile' => '/articles/11.txt'
    ],
    [
        'title' => '/titles/12.txt',
        'contentFile' => '/articles/12.txt'
    ],
    [
        'title' => '/titles/13.txt',
        'contentFile' => '/articles/13.txt'
    ],
    [
        'title' => '/titles/14.txt',
        'contentFile' => '/articles/14.txt'
    ],
    [
        'title' => '/titles/15.txt',
        'contentFile' => '/articles/15.txt'
    ]
];

// An array of all dates and their order in time. 0 being the most recent (or furthest in the future).
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
    ],
    [
        'order' => 19,
        'date' => 'The Big Bang'
    ]
];
$shuffledDates = shuffleArray($dates);
$datesSample = [$shuffledDates[0],$shuffledDates[1],$shuffledDates[2],$shuffledDates[3],$shuffledDates[4],$shuffledDates[5],$shuffledDates[6],$shuffledDates[7],$shuffledDates[8],$shuffledDates[9]]; // A random selection of 10 of the above shuffled dates
$datesOrders = orderArray($datesSample); // The array sample is re-ordered by date via the orderArray function.

// The main articles array. 10 elements which each represent the 10 articles.
$articles = [
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[0] ]['title']), // Randomly selected article title.
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[0] ]['contentFile']), // Randomly selected article content (corresponding to title above).
        'author' => $authors[$ids[0]]['full_name'], // Randomly selected article author.
        'published_date' => $dates[ $datesOrders[0] ]['date'], // Randomly selected article date.
        'like_counter' => rand(0,1000), // Randomly selected number of likes between 0-1000.
        'dislike_counter' => rand(0,1000), // Randomly selected number of dislikes between 0-1000.
        'author_image' => $authors[$ids[0]]['image'] // Randomly selected article author image (corresponding to author above).
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[1] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[1] ]['contentFile']),
        'author' => $authors[$ids[1]]['full_name'],
        'published_date' => $dates[ $datesOrders[1] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[1]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[2] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[2] ]['contentFile']),
        'author' => $authors[$ids[2]]['full_name'],
        'published_date' => $dates[ $datesOrders[2] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[2]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[3] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[3] ]['contentFile']),
        'author' => $authors[$ids[3]]['full_name'],
        'published_date' => $dates[ $datesOrders[3] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[3]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[4] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[4] ]['contentFile']),
        'author' => $authors[$ids[4]]['full_name'],
        'published_date' => $dates[ $datesOrders[4] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[4]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[5] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[5] ]['contentFile']),
        'author' => $authors[$ids[0]]['full_name'],
        'published_date' => $dates[ $datesOrders[5] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[0]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[6] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[6] ]['contentFile']),
        'author' => $authors[$ids[1]]['full_name'],
        'published_date' => $dates[ $datesOrders[6] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[1]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[7] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[7] ]['contentFile']),
        'author' => $authors[$ids[2]]['full_name'],
        'published_date' => $dates[ $datesOrders[7] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[2]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[8] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[8] ]['contentFile']),
        'author' => $authors[$ids[3]]['full_name'],
        'published_date' => $dates[ $datesOrders[8] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[3]]['image']
    ],
    [
        'title' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[9] ]['title']),
        'content' => file_get_contents(__DIR__ . $titlesAndContent[ $articleID[9] ]['contentFile']),
        'author' => $authors[$ids[4]]['full_name'],
        'published_date' => $dates[ $datesOrders[9] ]['date'],
        'like_counter' => rand(0,1000),
        'dislike_counter' => rand(0,1000),
        'author_image' => $authors[$ids[4]]['image']
    ]
];
