<?php

require_once "Shape.php";

class Rectangle extends Shape{

//Atributes
public $width;
public $length;




//method
//Area of rectangle = length × breadth 

function calculateArea():float|int {
    return($this->width * $this->length);
}


}


?>