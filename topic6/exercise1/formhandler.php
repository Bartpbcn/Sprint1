<?php

//to avoid that


//check this every time
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $firstname = htmlspecialchars($_POST["firstname"]); //htmlspsecialchar noone can insert code in the form to hack your code. like this the server takes it like htnml entities
    $lastname = htmlspecialchars($_POST["lastname"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);

echo "These are the data that the user submitted:";
echo "<br>";
echo $firstname
echo "<br>";
echo $lastname
echo "<br>";
echo $username
echo "<br>";
echo $email
}



?>