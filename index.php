<?php

class Person{

  public $name;
  public $lastname;
}

function __construct($name, $lastname){

  $this -> name = $name;
  $this -> lastname = $lastname;
}

function __toString(){

  return "Name :". $this-> name . "<br>"
        ."Lastname :". $this-> lastname ;
}


class Guest extends Person{

  public $yearOfBirth;

  function __construct($name, $lastname, $yearOfBirth){

    parent:: __construct($name, $lastname)

      $this -> yearOfBirth = $yearOfBirth;
  }

  function __toString(){

    return parent::__toString()."<br> Year of Birth :".$this-> yearOfBirth;
  }
}

?>
