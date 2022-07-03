<?php
include 'Dbh.php';

class Register extends Dbh
{
    public function setPlayer(
        $firstName,
        $lastName,
        $club,
        $nationality,
        $position,
        $age,
        $marketValue
    )
    {
        $sql = 'INSERT INTO player (firstname, lastname, club, nationality, position, age, marketvalue) values (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $club, $nationality, $position, $age, $marketValue]);
    }
}