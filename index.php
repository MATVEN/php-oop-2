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




?>
