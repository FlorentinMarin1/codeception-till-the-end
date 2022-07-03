<?php

include "../classes/Register.php";


$firstName = $_POST['first'];
$lastName = $_POST['last'];
$club = $_POST['club'];
$nationality = $_POST['nationality'];
$position = $_POST['position'];
$age = $_POST['age'];
$marketValue = $_POST['marketValue'];



$registerPlayer = new Register();
$registerPlayer->setPlayer(
    $firstName,
    $lastName,
    $club,
    $nationality,
    $position,
    $age,
    $marketValue
);
header("Location: ../index.php?register=success");

