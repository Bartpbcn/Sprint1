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

echo "<title>" . MY_NAME . "</title><br>"; //php echo functie om titel weer te geven dus geen . ervoor.

//ex2
$helloStringVar = "Hello world";
echo $helloStringVar . "<br>";

echo strtoupper($helloStringVar) . "<br>"; //uppercase van de hele string

echo "Lenght of the string:" . strlen($helloStringVar) . "<br>";

echo "Reverse of the string:" . strrev($helloStringVar) . "<br>";

$phpCourse = "This is the PHP course." . "<br>";

echo $helloStringVar . " " . $phpCourse . "<br>";

//ex3

$X = 5;
$Y = 10;
$N = 5.5;
$M = 10.25;

echo "X = " . $X . "<br>";
echo "Y = " . $Y . "<br>";

echo "Sum = " . ($X + $Y) . "<br>";
echo "Difference = " . ($X - $Y) . "<br>";
echo "Product: " . ($X * $Y) . "<br>";
echo "Division: " . ($X / $Y) . "<br>";
echo "Modulus: " . ($X % $Y) . "<br>";

echo "N = " . $N . "<br>";
echo "M = " . $M . "<br>";


echo "Double of N: " . (2 * $N) . "<br>";
echo "Double of M: " . (2 * $M) . "<br>";
echo "Sum of all variables: " . ($X + $Y + $N + $M) . "<br>";
echo "Product of all variables: " . ($X * $Y * $N * $M) . "<br>";

//calculation via a switch as we can compare 1 var with min 1 action:

function calculator ($num1, $num2, $operation){ 
switch ($operation) {
    case "Sum":
        return $num1 + $num2;
      break;
    case "Difference":
      return $num1 - $num2;
      break;
    case "Multiply":
      return $num1 * $num2;
      break;
    case "Divide":
        if ($num2!=0){
       return $num1 / $num2;
        } else {
        return "Cannot divide by 0.";
        }
        break;
   
    default:
        return "Calculation not possible";
    }
}

//print on the screen:
echo "result of the sum:" . calculator (10, 5, "Sum") . "<br>";
echo "result of the difference:" . calculator (10, 5, "Difference") . "<br>";
echo "result of the multiplication:" . calculator (10, 5, "Multiply") . "<br>";
echo "result of the division:" . calculator (10, 5, "Divide") . "<br>";

?>