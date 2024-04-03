<?php

$X = array (10, 20, 30, 40, 50,60);

echo "The current count is" . count($X) . "<br>";
unset($X[3]); //delete 1 element in the array.

//rearrange values of the array after deleting an element
$X = array_values($X);

echo "The current count is" . count($X);
?>