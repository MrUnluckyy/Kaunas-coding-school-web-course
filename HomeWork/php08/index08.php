<?php
$temp =[- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];


$coldest_5 = '';
$sum = 0;

//also you could use array_sum($temp) for adding all items;
foreach ($temp as $value) {
    $sum = $sum + $value;
}

$average = round($sum / count($temp), 1);
echo "Vidutinė temperatūra: $average";

echo '<hr>';


asort($temp);

echo '5 mažiausioss mėnesio temperatūros: ' . implode(', ',(array_slice($temp, 0, 5)));

echo '<hr>';

echo '5 didžiausios mėnesio temperatūros: ' . implode(', ',(array_slice($temp, -5, 5)));





//$warmest_5 = array_slice($temp_sorteda, 5);
//echo $warmest_5;


?>
