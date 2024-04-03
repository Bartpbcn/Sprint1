<?php
/*Make an associative array that represents information about yourself. Specifically, it must include:

first name
age
email
favorite food
*/


$PersonalInfo = [

    "firstName" => "Bart",
    "age" => "38",
    "email" => "bartpauwels@me.com",
    "food" => "steak with Bearnaise and Belgian fries"

];

//added a foreach to understand if it works on screen

foreach ($PersonalInfo as $key => $value){
    echo $key . ":" . $value . "<br>";
}

?>