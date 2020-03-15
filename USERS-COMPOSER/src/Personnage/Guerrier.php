<?php
namespace App\Personnage;

class Guerrier extends AbstractPersonnage
{
  private $strength;

  public function __construct( 
  int $strength,
  int $health = 100)
  {
      $this->strength = $strength;
      $this->setHealth($health);
  }

 
  
  
  public function getStrength():?int
  {
      return $this->strength;
  }

  public function setStrength(int $strength): self
  {
      $this->strength=$strength;
      return $this;
  }

  public function calculDegats(): int
    {
        return intval($this->strength / 5);
    
    }
}