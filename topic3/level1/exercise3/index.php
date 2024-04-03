<?php
/*Create a function that receives as parameters an array of words and a character. 
The function returns true if all the words in the array have the character passed as the second parameter.
For example:
If we have [“hello”, “Php”, “Html”] it will return true if we ask for “h” but false if we ask for “l”.
*/


function controllingWords($words, $char){
    foreach ($words as $word){
        if (strpos(strtolower($word),strtolower($char)) === false) {
            return false;

        }
    }
    return true;
}

//Test
$words = ["hello", "Php", "Html"];

/*if (controllingWords($words, 'h')){
echo "True, all the words contain the character h. <br>";
} else{
    echo "False";
}*/

if (controllingWords($words, 'i')){
    echo "True, all the words contain the character i. <br>";
    } else{
        echo "False";
    }

?>