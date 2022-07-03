<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My little page</title>
    <link ref="stylesheet" href="style.css">
</head>
<body>
<h2>Player register: </h2>
<!--<form action="Includes/logic.php" method="POST">-->
<form method="POST">
    <label for="first">First name:</label><br>
    <input type="text" id="first" name="first" placeholder="First Name"><br>
    <label for="last">Last name:</label><br>
    <input type="text" id="last" name="last" placeholder="Last Name"><br>
    <label for="club" >Club:</label><br>
    <input type="text" id="club" name="club" placeholder="Club"><br>
    <label >Nationality:</label><br>
    <input type="text" id="nationality" name="nationality" placeholder="Nationality"><br>
    <label >Position:</label><br>
    <input type="text" id="position" name="position" placeholder="Position"><br>
    <label >Age:</label><br>
    <input type="text" id="age" name="age" placeholder="Age"><br>
    <label >MarketValue:</label><br>
    <input type="text" id="marketValue" name="marketValue" placeholder="Market Value"><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php

?>
</body>
</html>



//include 'src/classes/Register.php';
//
//
//$obj = new Register() ;
//$obj->setPlayer(
//    "Florentin",
//    "Marin",
//    "Liverpool",
//    "Romanian",
//    "Midfielder",
//    "30",
//    "1000000"
//);