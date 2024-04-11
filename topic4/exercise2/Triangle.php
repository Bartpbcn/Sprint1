<?php

require_once "Shape.php";
class Triangle extends Shape{


//atributes
public $width;
public $length;


// Constructor
function __construct($width, $length){
    $this->width = $width;
    $this->lenght = $length;
}

// Methods
//Area of triangle = (1/2) × base × height.
function calculateArea(): double {
    0.5 * $this->width * $this->length;
}



}





?>