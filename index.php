/* TODO TODAY:

       - Definire la classe Persona caratterizzata da nome e cognome;
       - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita;
       - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza);
       - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre;

       - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
   */


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

class Payer extends Person{

  public $residentialAddress
  public $billingAddress

  function __construct($name, $lastname, $residentialAddress, $billingAddress){

    parent:: __construct($name, $lastname)

      $this -> residentialAddress = $residentialAddress;
      $this -> billingAddress = $billingAddress;
  }

  function __toString(){

    return parent::__toString()."<br> Residential address :".$this-> residentialAddress
                               ."<br> Billing address :".$this-> billingAddress;
  }
}


?>
