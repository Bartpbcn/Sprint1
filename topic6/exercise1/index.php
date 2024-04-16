<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Form </title>
</head>
<body>

<p> Please fill in the following information:</p>
    <form action="includes/formhandler.php" method="post">
  
     <input  type="text" name="firstname" id="firstname" placeholder="firstname...">
    <br>
    <input  type="text" name="lastname" id="lastname" placeholder="lastname...">
    <br>
    <input  type="text" name="username" id="username" placeholder="username...">
    <br>
    <input  type="email" name="email" id="email" placeholder="email...">
    <br>
    <button type="submit" name="submit">Send it to us!</button>

</form> 

</body>
</html>