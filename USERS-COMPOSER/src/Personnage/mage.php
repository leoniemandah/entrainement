<?php
namespace App\Personnage;

class mage extends AbstractPersonnage
{
  private $inteligence;
  

  public function __construct( 
  int $inteligence,
  int $health = 100)
  {
      $this->inteligence = $inteligence;
      $this->setHealth($health);
  }

  
  
  public function getInteligence():?int
  {
      return $this->inteligence;
  }

  public function setInteligence(int $inteligence): self
  {
      $this->inteligence=$inteligence;
      return $this;
  }
  public function calculDegats(): int
  {
      return intval($this->inteligence / 10);
}
}