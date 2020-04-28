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



?>
