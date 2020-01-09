/* TODO TODAY:
    - Definire la classe Persona caratterizzata da nome e cognome;
    - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita;
    - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza);
    - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre;
    - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi*/

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

  function __construct($name, $lastname, $residentialAddress,){

    parent:: __construct($name, $lastname)

      $this -> residentialAddress = $residentialAddress;
  }

  function __toString(){

    return parent::__toString()."<br> Residential address :".$this-> residentialAddress;
  }
}

// Stamp

    $person = new Person("Mattia", "Vena");

    echo "CLASSE PERSONA <br><br>" . $person;
    echo "<br><br> --------------------- <br><br>";

    $guest = new Guest("Mattia", "Vena", 1993);

    echo "CLASSE OSPITE <br><br>" . $guest;
    echo "<br><br> --------------------- <br><br>";

    $payer = new Payer("Mattia", "Vena", "Via le mani dal naso 69");

    echo "CLASSE PAGANTE <br><br>" . $payer;
