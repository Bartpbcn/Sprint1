<?php


$array_1 = array (0.15, 5, 10, 15, 25, 30);
$array_2 = array (0.15, 1.25, 3.05, 5);

$intersection = array_intersect($array_1,$array_2);

print_r($intersection);

echo "<br>";


$merge = array_merge($array_1, $array_2);
print_r($merge);

?>