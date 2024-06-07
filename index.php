<?php
$books  = [
    'Dertogada',
    'Fikir eske mekabir',
    'yeogaden dimetoch'
];

$medias = [
    [
        'name' => 'facebooks',
        'website' => 'https://www.facebook.com',
    ],
    [
        'name' => 'titkok',
        'website' => 'https://titkok.com',
    ],
    [
        'name' => 'google',
        'website' => 'https://www.google.com'
    ]
];
$movies = [
    [
        'name' => 'Yearada lij',
        'released' => 2000
    ],
    [
        'name' => 'Aman',
        'released' => 2002
    ],
    [
        'name' => 'Kebron',
        'released' => 2000
    ],
    [
        'name' => 'Rebuni',
        'released' => 2001
    ],
];

$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['released'] <= 2000;
});


require('index.view.php');
