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

/* database script
CREATE TABLE `Football`.`player`(
`id` SMALLINT(9) NOT NULL ,
 `first_name` VARCHAR(256) NOT NULL ,
`last_name` VARCHAR(256) NOT NULL ,
`club` VARCHAR(256) NOT NULL ,
`nationality` VARCHAR(256) NOT NULL ,
`position` VARCHAR(256) NOT NULL ,
`age` INT(3) NOT NULL ,
`market_value` INT(11) NOT NULL ,
UNIQUE `id_name` (`id`)
)
ENGINE = InnoDB;
*/
