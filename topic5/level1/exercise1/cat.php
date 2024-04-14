<?php
require_once 'animal.php';

class Cat extends Animal{

    public function makeSound() : string{
        return $this->name . " says Miauw.";


    }


}





?>