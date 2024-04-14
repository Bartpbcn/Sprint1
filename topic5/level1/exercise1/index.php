<?php
require_once 'dog.php';
require_once 'cat.php';

//object creation and store in the var
$dog = new Dog("Buddy");
$cat = new Cat ("Shadow");

// call the nethod for each object
echo $dog->makeSound() . PHP_EOL;
echo $cat->makeSound() . PHP_EOL; 

?>