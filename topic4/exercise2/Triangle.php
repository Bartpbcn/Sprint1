<?php

require_once "Shape.php";
class Triangle extends Shape{


//atributes
public $width;
public $length;




// Methods
//Area of triangle = (1/2) × base × height.
function calculateArea(): float|int {
    return 0.5 * $this->width * $this->length;
}



}





?>