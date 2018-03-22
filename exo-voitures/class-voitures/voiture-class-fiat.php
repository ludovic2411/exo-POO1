<?php
class Fiat{//on fixe les propriétés "fixes"
  public $modele="fiat500";
  public $statut="free";
  public $poids="1,2";
  public $plaque="BE40";
  public $kilometrage="220.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }

}
 ?>
