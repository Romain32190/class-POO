<?php

class pokemon{

  private $name;
  private $pv;
  private $lvl;
  private $attack1;
  private $attack2;


  function __construct($name, $pv, $lvl, $attack1, $attack2){
    $this->name = $name;
    $this->pv = $pv;
    $this->lvl = $lvl;
    $this->attack1 = $attack1;
    $this->attack2 = $attack2;
  }
  public function getName(){
    return $this->name;
  }

  public function setName(){
    $this->name = $name;
  }

  public function getPv(){
    return $this->pv;
  }

  public function setPv(){
    $this->pv = $pv;
  }

  public function getLvl(){
    return $this->lvl;
  }
  public function setLvl(){
    $this->lvl = $lvl;

  }
  public function getAttack1(){
    return $this->attack1;
  }
  public function setAttack1(){
    $this->attack1 = $attack1;

  }
  public function getAttack2(){
    return $this->attack2;
  }
  public function setAttack2(){
    $this->attack2 = $attack2;
  }

  public function stats(){
    echo '<pre>';
    print_r(array(
      'name'=> $this->getName(),
      'pv' => $this->getPv(),
      'lvl' => $this->getLvl(),
      'attack1' => $this->getAttack1(),
      'attack2' => $this->getAttack2(),



    ));
    echo '</pre>';
  }
}





 ?>
