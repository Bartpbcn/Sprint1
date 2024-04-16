<?php



//run this every time for every fill in
//if($_SERVER["REQUEST_METHOD"]== "POST"){

    $firstname = $_POST["firstname"]; //htmlspsecialchar is an option so no one can insert code in the form to hack your code. like this the server takes it like htnml entities
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    
//info for ourselves when user submitted:
echo "These are the data that the user submitted:";
echo "<br>";
echo $firstname . "<br>";

echo $lastname . "<br>";

echo $username . "<br>";

echo $email . "<br>";


?>