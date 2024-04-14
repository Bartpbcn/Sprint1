<?php

abstract class Animal{

    //atributes
    protected $name;

    //constrcutor

    public function __construct($name){
        $this->name = $name;
    } 
//abstract method for the subclasses
abstract public function makeSound();

}


?>