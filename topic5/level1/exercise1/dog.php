<?php
require_once 'animal.php';


class Dog extends Animal{

    public function makeSound() : string{
        return $this->name . " " . "says: Woef";
        
    }


}




?>