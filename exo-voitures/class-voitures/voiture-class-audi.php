<?php
class Audi{//on fixe les propriétés "fixes"
  public $modele="audi";
  public $statut="reserved";
  public $poids="3,6";
  public $plaque="DE21";
  public $kilometrage="98.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }

}
 ?>
