<?php

require_once "Triangle.php";
require_once "Rectangle.php";
require_once "Shape.php";

// Create a Triangle object and calculate 
$triangle = new Triangle(5, 9);
echo "Area of triangle is: " . $triangle->calculateArea() . "</br>";

// Create a Rectangle object and calculate 
$rectangle = new Rectangle(3, 5);
echo "Area of rectangle is: " . $rectangle->calculateArea() . "</br>";

?>