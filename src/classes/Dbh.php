<?php

class Dbh
{
    private $host = 'localhost';
    private $dbname = 'Football';
    private $username = 'root';
    private $password = "";

  protected function connect() {
      try {
          $dbh = new PDO(
              'mysql:host=' . $this->host . ';dbname=' . $this->dbname,
              $this->username,
              $this->password
          );
          return $dbh;
      }
      catch (PDOException $exception){
            print "Error!: " . $exception->getMessage() . "<br>";
            die();
      }
  }
}