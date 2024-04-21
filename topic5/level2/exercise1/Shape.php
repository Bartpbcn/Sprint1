<?php

abstract class Shape{

    abstract public function calculateArea() {

    public function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }

}
   
?>