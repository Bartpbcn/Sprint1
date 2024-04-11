<?php

require_once "Shape.php";

class Rectangle extends Shape{

//Atributes
public $width;
public $length;


//Constructor

function __construct($width, $length){
    $this->width = $width;
    $this->length = $length;
}

//method
//Area of rectangle = length × breadth 

function calculateArea():double {
    return($this->width * $this->length);
}


}


?>