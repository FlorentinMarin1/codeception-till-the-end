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
        $sql = 'INSERT INTO player (first_name, last_name, club, nationality, position, age, market_value) values (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $club, $nationality, $position, $age, $marketValue]);
    }
}