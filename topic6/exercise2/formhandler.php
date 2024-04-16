<?php

//start the php session for the user name
session_start();
 

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];


// store suername
$_SESSION["username"] = $username;



//info for ourselves when user submitted:
echo "These are the data that the user submitted:";
echo "<br>";
echo $firstname . "<br>";

echo $lastname . "<br>";

echo $username . "<br>";

echo $email . "<br>";


?>