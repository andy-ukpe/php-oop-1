<?php
class User{
  public $name;

  public $cognome;

  public $email;

  public $eta;

  public function __construct($_nome, $_cognome){
    $this->nome =$_nome;
    $this->cognome =$_cognome;
    $this->email =$_email;
    $this->eta =$_eta;

  }

  public function setName($name){
    if (!empty ($name)){
      $this->nome = $_nome;
    } else{
      die('Nome non può essere vuoto');
    }
  }

  public function getFullName(){
    return $this->nome . ' ' . $this->cognome . ' ' . $this->email . ' ' . $this->eta;

  }
}
 ?>
