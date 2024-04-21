<?php

class Index{

    abstract public function calculateArea(){

        $triangle = new Triangle(5, 7);
        echo "Triangle Area: " . $triangle->calculateArea() . "</br>";
        
        $rectangle = new Rectangle(4, 6);
        echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";

    }



}
?>