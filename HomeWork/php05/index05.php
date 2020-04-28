<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    print_r($cities);
    $cities[] = 'Tokijas';
    echo "<ul><li> $cities[1] </li></ul>";

    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];

    $cities2['londonas'] = 8.6;
    print_r($cities2);

    echo '<ul><li>"Gyventojų skaičius: ' . $cities2['tokijas'] . 'mln." </li></ul>';

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

    echo "
        <ul>
        <li>Gyventojų skaičius: {$outputc3[0]} mln.</li>
        <li>Įkurtas: {$outputc3[1]} m.</li>
        <li>Šalis: {$outputc3[2]}</li>
        </ul>
        "
?>

