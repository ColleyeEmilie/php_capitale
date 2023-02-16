<?php
$title = "Choisis un pays et je te donnerai sa capitale";
$countries = [
    'afrique du sud' => [
        'capital-name' => 'johannesbourg',
        'flag' => 'south-africa-flag-icon-256.png'
    ],
    'belgique' => [
        'capital-name' => 'bruxelles',
        'flag' => 'belgium-flag-icon-256.png'
    ],
    'allemagne' => [
        'capital-name' => 'berlin',
        'flag' => 'germany-flag-icon-256.png'
    ],
    'corée du nord' => [
        'capital-name' => 'pyongyang',
        'flag' => 'north-korea-flag-icon-256.png'
    ],
];


ksort($countries);
$countryInfos = [];
$requestedCountry = '';
$errors = [];

if (isset($_GET['country'])) {
    $requestedCountry = urldecode($_GET['country']);
    if(array_key_exists($requestedCountry, $countries)){
        $countryInfos = $countries[$requestedCountry];
    }else{
        $errors['inexistent-country'] = 'ce pays n existe pas dans nos listes';
    }
}

require('index.view.php');
