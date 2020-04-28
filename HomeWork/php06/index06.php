<?php

    //Uzduotis 04

    $cities = ['Berlynas', 'Roma', 'Londonas'];

    $cities[] = 'Tokijas';

    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];

    $cities2['londonas'] = 8.6;

    //Uzduotis 05

    $cities3 = [
        'Tokijas' => [
            13.6,
            1868,
            'Japonija'
        ],

        'Vasingtonas' => [
            0.6,
            1790,
            'JAV'
        ],

        'Maskva' => [
            11.5,
            1147,
            'Rusija'
        ]
    ];

    $cities3['Londonas'] = [8.6, 43, 'Anglija'];

    $city = 'Londonas';
    $outputc3 = $cities3[$city];

    //Uzduotis 06

    $metai = 1774;

    if ($metai >= $cities3['Vasingtonas'][1]) {
        echo 'Vašingtonas yra JAV sostinė.';
    } elseif ($metai === 1774) {
        echo 'JAV sostinė vis dar Filadelfijoje.';
    } else {
        $delta = $cities3['Vasingtonas'][1] - $metai;
        echo "Liko $delta metai (-ų) iki Vašingtono įkūrimo";
    }


    ?>

