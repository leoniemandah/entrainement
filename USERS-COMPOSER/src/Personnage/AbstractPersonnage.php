<?php
namespace App\Personnage;

abstract class AbstractPersonnage
{
    //Attribut protégé
    //Inaccessible de l'extérieur
    //Accessible par les classes héritant de personnage
 protected $health;

public function getHealth(): int
 {
    return $this->health;
 }
 public function setHealth(int $health): self
  {
      if ($health<0){
          $this->health =0;
      }else{
  $this->health = $health;}
  return $this;
 }

 public abstract function calculDegats(): int;
 
 public function attack(AbstractPersonnage $target)
 {
     $degats = $this->calculDegats();
 // points de vie restants de l'adversaire
 $targetHealth = $target->getHealth();
 // point de vie après application des dégats
 $targetNewHealth = $targetHealth - $degats;
 // affectation des nouveaux points de vie à la cible
 $target->setHealth($targetNewHealth);

 }
}