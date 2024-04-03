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

function calculator (int $num1, int $num2, string $operation) : int|string{ 
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



//ex4

$limit = 10;
$step = 1;

//de loop herhaalt zich tot initiele waarde 1 de end waarde bereilktheeft.
    
function countup(int $limit = 10, int $step = 1) : void {
            for ($i = 1; $i <= $limit; $i += $step) {
                echo $i . "<br>";

    }
} 
/*In PHP wordt de incrementoperator ++ gebruikt om de waarde van een variabele met 1 te verhogen. Dus als je bijvoorbeeld $i++ gebruikt, wordt $i met 1 verhoogd.

In dit specifieke geval wordt echter de variabele $i niet met 1 verhoogd, maar met een waarde bepaald door de parameter $step. Dus als je $step wilt toevoegen aan $i, moet je de samenstellingstoewijzingsoperator += gebruiken. Hierdoor wordt de waarde van $i met de waarde van $step verhoogd.

Dus als je wilt dat $i met 1 wordt verhoogd bij elke iteratie, gebruik je $i++. Maar als je wilt dat $i met een andere waarde wordt verhoogd, gebruik je $i += $step.*/

countup(); //niet invullen voor de standaardwaarde

countup(20,2); //standaardwaarde gewijzigd van 10, 1 naar 20,2

//ex5

$mark = 40;



function whichDivision(int $mark): string
{if ($mark >= 60){
    $grade = "FIRST DIVISION";
}
else if ($mark >= 45){
    $grade = "SECOND DIVISION";
}else if ($mark >= 33){
    $grade = "THIRD DIVISION";
}else {
    $grade = "FAIL";

}  
return "Student grade = $grade <br>";
}

echo whichDivision($mark);

function isBitten() {
    // rand(0,1) geeft randomly een cijfer tussen 0 en 1 weer, gelijk een coin.
    return rand(0,1) < 0.5; //o.5 staat overeen als 50%van de time.
}
if (isBitten()) {
    echo "Charlie bit your finger";
} else {
    echo "Charlie bit not your finger";
}




?>