<?php
//ex1
$integerVar = 12;
$doubleVar = 0.12;
$stringVar = "Hello";
$booleanVar = "true";

echo "Integer:" . $integerVar . "<br>";
echo "Double:" . $doubleVar . "<br>";
echo "String:" . $stringVar . "<br>";
echo "Boolean:" . $booleanVar . "<br>";

define("MY_NAME", "Bart");

echo "<title>" . MY_NAME . "</title>" . "<br>";

//ex2
$helloStringVar = "Hello world";
echo $helloStringVar . "<br>";

echo strtoupper($helloStringVar) . "<br>"; //uppercase van de hele string

echo "Lenght of the string:" . strlen($helloStringVar) . "<br>";

echo "Reverse of the string:" . strrev($helloStringVar) . "<br>";

$phpCourse = "This is the PHP course." . "<br>";

echo $helloStringVar . " " . $phpCourse . "<br>"
?>