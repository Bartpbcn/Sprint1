<?php

abstract class Animal{

    //atributes
    protected $name;

    //constrcutor

    public function__construct($name){
        $this->name = $name;
    } 
//abstract method for the subclasses
abstract public function makeSound();

}

//object creation and store in the var
$dog = new Dog("Buddy");
$cat = new Cat ("Shadow");

// call the nethod for each object
echo $dog->makeSound() . PHP_EOL;
echo $cat->makeSound() . PHP_EOL; 


?>