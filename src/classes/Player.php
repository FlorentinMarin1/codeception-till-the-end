<?php

class Player
{
    private $firstName;

    private $lastName;

    private $club;

    private $nationality;

    private $position;

    private $age;

    private $marketValue;

    public function __construct(
        string $firstName,
        string $lastName,
        string $club,
        string $nationality,
        string $position,
        int    $age,
        float  $marketValue
    )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->club = $club;
        $this->nationality = $nationality;
        $this->position = $position;
        $this->age = $age;
        $this->marketValue = $marketValue;
    }
}